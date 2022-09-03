<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\BranchController;
use App\Http\Controllers\backend\PurchesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('backend.dashboard');
});

Route::get('/admin', function () {
    return view('backend.dashboard');
});

Route::get('/admin/addproduct',[ProductController::class,'index'])->name('addproduct');
Route::post('/admin/productstore',[ProductController::class,'store'])->name('productstore');

Route::get('/admin/showproduct',[ProductController::class,'show'])->name('showproduct');
Route::get('/admin/deleteproduct/{id}',[ProductController::class,'delete'])->name('deleteproduct');
Route::get('/admin/editproduct/{id}',[ProductController::class,'edit'])->name('editproduct');
Route::post('/admin/updateproduct/{id}',[ProductController::class,'update'])->name('updateproduct');


Route::group(['prefix'=>'/branch'],function(){
   Route::get('/addbranch',[BranchController::class,'index'])->name('addbranch');
   Route::post('/branchstore',[BranchController::class,'store']);
   Route::get('/managebranch',[BranchController::class,'show'])->name('managebranch');

   Route::get('/branchdelete/{id}',[BranchController::class,'destroy']);

});

Route::group(['prefix'=>'/purches'],function(){
    Route::get('/addpurches',[PurchesController::class,'index'])->name('addpurches');
    Route::get('/find/{id}',[PurchesController::class,'find']);
    Route::post('/purchesstore',[PurchesController::class,'store']);
    Route::get('/stock',[PurchesController::class,'stock'])->name('stock');

  
 
 });
// Route::get('/admin/showproduct', function () {
//     return view('backend.pages.showproducts');
// })->name('showproduct');