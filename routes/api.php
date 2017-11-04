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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/deals', 'DealsController@show');
Route::get('/deals/addlike/{id}', 'DealsController@addLike');

Route::get('/products', 'ProductsController@show');
Route::get('/category/addsearch/{id}', 'ProductsController@addSearch');
Route::get('/products/addlike/{id}', 'ProductsController@addLike');

