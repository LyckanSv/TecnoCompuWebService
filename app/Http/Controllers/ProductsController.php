<?php

namespace App\Http\Controllers;

use App\Products;
use App\Manufacturer;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        
        $request->validate([
            'name' => 'required|max:255|string',
            'description' => 'required|string',
            'image' => 'required|image',
            'model' => 'required'
        ]);

        $manufacturer = $request->manufacturer_id;
        
        if($manufacturer == 'Nuevo fabricante'){
            $request->validate([
               'manufacturer_name'=>'required|max:100' 
            ]);
            $manufacturer = (Manufacturer::create(['name'=>$request->manufacturer_name]))->id;
        }
        
        $path = Storage::putFile('public/imgProducts', $request->file('image'));
        $url = Storage::url($path);
        $product = new Products;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->picture_url = $url;
        $product->picture_path = $path;
        $product->manufacturer_id = $request->manufacturer_id;
        $product->model = $request->model;
        $product->likes = 0;
        $product->searches = 0;
        $product->save();

        return View('/products/return-add');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
    }
}
