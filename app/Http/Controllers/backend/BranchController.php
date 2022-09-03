<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\BranchModel;
use Illuminate\Support\Facades\Validator;
class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.branch.addbranch');
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
        $valid = Validator::make($request->all(),[

            'br_name'=>'required',
            'br_manager'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'email'=>'required'

        ]);

        if($valid->fails()){
            return response()->json([
                "status"=>"failed",
                "errors"=>$valid->messages()
            ]);
        }
        else{
            $obj = new BranchModel;

            $obj->br_name = $request->br_name;
            $obj->br_manager = $request->br_manager;
            $obj->phone  = $request->phone;
            $obj->address  = $request->address;
            $obj->email  = $request->email;

            $obj->save();
            return response()->json([
                "status"=>"success"
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
        $allbranch = BranchModel::all();

        return response()->json([

            "allbranch"=>$allbranch
        ]);
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
        $allbranch = BranchModel::find($id);

        $allbranch->delete();
        return response()->json([
            "status"=>"success"
        ]);
    }
}
