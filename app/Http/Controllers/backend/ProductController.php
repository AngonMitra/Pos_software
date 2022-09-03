<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\ProductModel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.addproduct');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $obj = new ProductModel;

       $obj->ptitle = $request->ptitle;
       $obj->pdes = $request->pdes;
       $obj->category = $request->category;
       $obj->pmodel = $request->pmodel;
       $obj->cost_price = $request->cost_price;
       $obj->sale_price = $request->sale_price;
       $obj->quantity = $request->quantity;

       $confirm = $obj->save();

       if($confirm){
           
           return response()->json([
              "msg"=>"success"
           ]);
       }
       else{
        return response()->json([
            "msg"=>"error"
        ]);
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $allproduct = ProductModel::all();

        return view('backend.pages.showproducts', compact("allproduct"));

        // if($data){
        //     return response()->json([
        //         'msg'=>'success',
        //         'product'=>$data
        //     ]);
        // }
        // else{
        //     return response()->json([
        //         'msg'=>'error'
        //     ]);
        // }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = ProductModel::find($id);

        return view('backend.pages.showproducts', compact("product"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = ProductModel::find($id);

        $product->ptitle = $request->ptitle;
        $product->pdes   = $request->pdes;
        $product->category = $request->category;
        $product->pmodel = $request->pmodel;
        $product->cost_price = $request->cost_price;
        $product->sale_price = $request->sale_price;
        $product->quantity = $request->quantity;

        $product->update();
        return redirect()->route("showproduct");

    }

    public function delete($id){
        $delete = ProductModel::find($id);
        $delete->delete();
        return redirect()->route("showproduct");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
