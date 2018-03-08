<?php

use Illuminate\Http\Request;

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
Route::resource('buyer','buyer\buyercontroller',['only' => ['index','show']]);

Route::resource('category','category\categorycontroller',['except' => ['create','edit']]);

Route::resource('product','product\productcontroller',['only' => ['index','show']]);

Route::resource('transaction','transaction\transactioncontroller',['only' => ['index','show']]);

Route::resource('seller','seller\sellercontroller',['only' => ['index','show']]);

Route::resource('user','user\usercontroller',['except' => ['create','edit']]);

