<?php

use App\Http\Controllers\Admin\PaypalController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=>'paypal'],function(){
  Route::post('/order/create',[PaypalController::class,'create']);
  Route::post('/order/capture',[PaypalController::class,'capture']);

  // Route::post('/cart_order/create',[PaypalController::class,'cart_create']);
  Route::post('/cart_order/cart_capture',[PaypalController::class,'cart_capture']);
});
