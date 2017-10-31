<?php
use App\Manufacturer;
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
    return view('welcome');
});

// Products
Route::get('/products/add', function () {
    $manufacturers = Manufacturer::all();
    return view('/products/add')->with('manufacturers', $manufacturers);;
})->middleware('auth');

Route::get('/products/edit', function () {
    return view('/products/edit');
})->middleware('auth');

Route::get('/products/show', function () {
    return view('/products/show');
})->middleware('auth');

Route::get('/products/update', function () {
    return view('/products/update');
})->middleware('auth');

Route::get('/products/add-complete', function () {
    return view('/products/return-add');
})->middleware('auth');

Route::get('/products/update-complete', function () {
    return view('/products/return-update');
})->middleware('auth');

Route::post('/products/add','ProductsController@store' )->middleware('auth');

// Deals

Route::get('/deals/add', function () {
    return view('/deals/add');
})->middleware('auth');

Route::get('/deals/edit', function () {
    return view('/deals/edit');
})->middleware('auth');

Route::get('/deals/show', function () {
    return view('/deals/show');
})->middleware('auth');

Route::get('/deals/update', function () {
    return view('/deals/update');
})->middleware('auth');

Route::get('/deals/add-complete', function () {
    return view('/deals/return-add');
})->middleware('auth');

Route::get('/deals/update-complete', function () {
    return view('/deals/return-update');
})->middleware('auth');

// Users

Route::get('/users/add', function () {
    return view('/users/add');
})->middleware('auth');

Route::get('/users/edit', function () {
    return view('/users/edit');
})->middleware('auth');

Route::get('/users/show', function () {
    return view('/users/show');
})->middleware('auth');

Route::get('/users/update', function () {
    return view('/users/update');
})->middleware('auth');

Route::get('/users/add-complete', function () {
    return view('/users/return-add');
})->middleware('auth');

Route::get('/users/update-complete', function () {
    return view('/users/return-update');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

