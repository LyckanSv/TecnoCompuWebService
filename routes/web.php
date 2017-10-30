<?php

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

Route::get('/dev', function () {
    return view('home');
});


// Products
Route::get('/products/add', function () {
    return view('/products/add');
});

Route::get('/products/edit', function () {
    return view('/products/edit');
});

Route::get('/products/show', function () {
    return view('/products/show');
});

Route::get('/products/update', function () {
    return view('/products/update');
});

Route::get('/products/add-complete', function () {
    return view('/products/return-add');
});

Route::get('/products/update-complete', function () {
    return view('/products/return-update');
});

// Deals

Route::get('/deals/add', function () {
    return view('/deals/add');
});

Route::get('/deals/edit', function () {
    return view('/deals/edit');
});

Route::get('/deals/show', function () {
    return view('/deals/show');
});

Route::get('/deals/update', function () {
    return view('/deals/update');
});

Route::get('/deals/add-complete', function () {
    return view('/deals/return-add');
});

Route::get('/deals/update-complete', function () {
    return view('/deals/return-update');
});

// Users

Route::get('/users/add', function () {
    return view('/users/add');
});

Route::get('/users/edit', function () {
    return view('/users/edit');
});

Route::get('/users/show', function () {
    return view('/users/show');
});

Route::get('/users/update', function () {
    return view('/users/update');
});

Route::get('/users/add-complete', function () {
    return view('/users/return-add');
});

Route::get('/users/update-complete', function () {
    return view('/users/return-update');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

