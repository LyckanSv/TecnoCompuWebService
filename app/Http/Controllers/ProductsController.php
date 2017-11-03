<?php

namespace App\Http\Controllers;

use App\Products;
use App\Manufacturer;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Auth;

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
        
        if($manufacturer == 'Nuevo fabricante' || !isset($manufacturer)){
            $request->validate([
               'manufacturer_name'=>'required|max:100' 
            ]);
            $manufacturer = (Manufacturer::create(['name'=>$request->manufacturer_name]))->id;
        }else{
            $posicion_coincidencia = strpos($request->manufacturer_id, '-', 0);
            $manufacturer = substr($request->manufacturer_id, 0, $posicion_coincidencia);
        }

        $category = $request->category_id;

        if($category == 'Nueva categoria' || !isset($category)){
            $request->validate([
               'category_name'=>'required|max:100' 
            ]);
            $category = (Category::create(['name'=>$request->category_name]))->id;
        }else{
            $posicion_coincidencia = strpos($request->category_id, '-', 0);
            $category = substr($request->category_id, 0, $posicion_coincidencia);
        }
        
        $path = Storage::putFile('public/imgProducts', $request->file('image'));
        $url = Storage::url($path);
        $product = new Products;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->picture_url = $url;
        $product->picture_path = $path;
        $product->manufacturer_id = $manufacturer;
        $product->category_id = $category;
        $product->model = $request->model;
        $product->likes = 0;
        $product->searches = 0;
        $product->save();

        return View('/products/return-add')->with('product', $product);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        $pool = [];
        $products = Products::all();
        foreach ($products as $product ) {
            $temp = [
                'name' => $product->name,
                'description'=> $product->description,
                'picture_url'=> $product->picture_url,
                'manufacturer'=> Manufacturer::find($product->manufacturer_id)->name,
                'model'=> $product->model,
                'likes'=> $product->likes,
                'searches'=> $product->searches,
                'category_id'=> Category::find($product->category_id)->name
            ];

            array_push($pool, $temp);
        }

        return Array('products'=>$pool);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        
        return View('/products/return-edit')
        ->with('product',Products::find($id))
        ->with('manufacturers', $manufacturers = Manufacturer::all())
        ->with('categories', Category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'description' => 'required|string',
            'model' => 'required'
        ]);

        $manufacturer = $request->manufacturer_id;
        
        if($manufacturer == 'Nuevo fabricante' || !isset($manufacturer)){
            $request->validate([
               'manufacturer_name'=>'required|max:100' 
            ]);
            $manufacturer = (Manufacturer::create(['name'=>$request->manufacturer_name]))->id;
        }else{
            $posicion_coincidencia = strpos($request->manufacturer_id, '-', 0);
            $manufacturer = substr($request->manufacturer_id, 0, $posicion_coincidencia);
        }

        $category = $request->category_id;
        
                if($category == 'Nueva categoria' || !isset($category)){
                    $request->validate([
                       'category_name'=>'required|max:100' 
                    ]);
                    $category = (Category::create(['name'=>$request->category_name]))->id;
                }else{
                    $posicion_coincidencia = strpos($request->category_id, '-', 0);
                    $category = substr($request->category_id, 0, $posicion_coincidencia);
                }

        $product = Products::find($request->id);

        if (!empty($request->file('image'))) {
            $path = Storage::putFile('public/imgProducts', $request->file('image'));
            $url = Storage::url($path);
            $product->picture_url = $url;
            $product->picture_path = $path;
        }
         
        $product->name = $request->name;
        $product->description = $request->description;

        $product->manufacturer_id = $manufacturer;
        $product->category_id = $category;
        $product->model = $request->model;
        $product->likes = 0;
        $product->searches = 0;
        $product->save();

        return View('/products/return-add')->with('product', $product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::find($id);
        if($product->delete()){
            $product = Products::all();
            return view('/products/edit')->with('products', $product);
            
        }

    }
}
