<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\PurchesModel;
use App\Models\backend\BranchModel;
use App\Models\backend\ProductModel;
use App\Models\backend\stock;
class PurchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allbranch = BranchModel::all();
        return view('backend.pages.purches.addpurches',compact("allbranch"));
    }


    public function find($id)
    {
        $product = ProductModel::where("pmodel",$id)->get();

        $stock = stock::Where("pr_id",$id)->get();
        return response()->json([
            "product"=>$product,
            "stock"=>$stock
        ]);
      
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
       $obj = new PurchesModel;

       $obj->date = $request->date;
       $obj->br_id = $request->br_id;
       $obj->company = $request->company;
       $obj->invoice = $request->invoice;
       $obj->pmodel = $request->pmodel;
       $obj->dis = $request->dis;
       $obj->disamount = $request->disamount;
       $obj->tamount = $request->tamount;


       $product = ProductModel::where("pmodel",$request->pmodel)->get();
       foreach($product as $product){
        $product->quantity = $product->quantity + $request->quantity;
        $product->update();
      }

       $stock = stock::Where("br_id",$request->br_id)->Where("pr_id",$request->pmodel)->get();
       
        $Stock1 = new Stock;
        $Stock1->br_id = $request->br_id;
        $Stock1->pr_id = $request->pmodel;
        // $Stock1->quantity = $request->quantity;
        $Stock1->save();
    

       

       $obj->save();
       return response()->json([
           "status" => "success"
       ]);

    }

    public function stock(){
        $allstock = stock::all();
        return view("backend.pages.stock.productstock",compact("allstock"));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
