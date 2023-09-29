<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/login', function () {
    return view('login');
});
Route::get('/sinup', function () {
    return view('sinup');
});
Route::get('/addproduct', function () {
    return view('addproduct');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::post("/login",[UserController::class,'login']);
Route::get("/",[ProductController::class,'index']);
Route::get("/detail/{id}",[ProductController::class,'detail']);
Route::post("/add_to_cart",[ProductController::class,'addToCart']);
Route::get("/cartlist",[ProductController::class,'cartlist']);
Route::get("/removecart/{id}",[ProductController::class,'removeCart']);
Route::get("/odernow",[ProductController::class,'oderNow']);
Route::get("/deleteproduct/{id}",[ProductController::class,'deleteproduct']);
Route::get("/editproductdetails/{id}",[ProductController::class,'editproductdetails']);
Route::post("/oderplace",[ProductController::class,'oderPlace']);
Route::post("/sinup",[UserController::class,'sinup']);
Route::post("/addproduct",[ProductController::class,'addproduct']);
Route::post("/editproduct",[ProductController::class,'editproduct']);
Route::get("/search",[ProductController::class,'search']);
