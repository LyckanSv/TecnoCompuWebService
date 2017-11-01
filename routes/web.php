<?php
use App\Manufacturer;
use App\Products;
use App\Deal;
use App\Category;

Route::get('/', function () {
    return view('welcome');
});

// Products
Route::get('/products/add', function () {
    $manufacturers = Manufacturer::all();
    return view('/products/add')
    ->with('manufacturers', $manufacturers)
    ->with('categories', Category::all());
})->middleware('auth');

Route::get('/products/edit', function () {
    $product = Products::all();
    return view('/products/edit')->with('products', $product);
})->middleware('auth');

Route::get('/products/show', function () {
    $product = Products::all();
    return view('/products/show')->with('products', $product);
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
Route::get('/products/delete/{id}','ProductsController@destroy' )->middleware('auth');
Route::get('/products/edit/{id}','ProductsController@edit' )->middleware('auth');
Route::post('/products/update','ProductsController@update' )->middleware('auth');


// Deals

Route::get('/deals/add', function () {
    $product = Products::all();
    return view('/deals/add')->with('products', $product);
})->middleware('auth');

Route::get('/deals/edit', function () {
    return view('/deals/edit')->with('deals', Deal::all() );
})->middleware('auth');

Route::get('/deals/show', function () {
    return view('/deals/show')->with('deals', Deal::all() );
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

Route::post('/deals/add','DealsController@store' )->middleware('auth');
Route::get('/deals/delete/{id}','DealsController@destroy' )->middleware('auth');
Route::get('/deals/edit/{id}','DealsController@edit' )->middleware('auth');
Route::post('/deals/update','DealsController@update' )->middleware('auth');

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

