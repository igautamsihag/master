<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::get('/order', function (){
//   return ['order_status' => "Shipped"];
//});
Route::post('/store',[\App\Http\Controllers\UserController::class,'store'])->name('store');

Route::post('/create/store', function (Request $request){
    return $request->all();
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/order',[\App\Http\Controllers\OrderController::class,'index'])->name('order');

Route::post('create/order', [\App\Http\Controllers\OrderController::class,'order']);

Route::get('/bidding',[\App\Http\Controllers\BiddingController::class,'index'])->name('bidding');

Route::post('/bidding',[\App\Http\Controllers\BiddingController::class,'bidding']);


