<?php

namespace App\Http\Controllers;

use App\Deal;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Auth;

class DealsController extends Controller
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
            'title' => 'required|max:255|string',
            'subtitle' => 'required|max:255|string',
            'description' => 'required|string',
            'image' => 'required|image',
        ]);
        
        $posicion_coincidencia = strpos($request->product_id, '-', 0);
        $idProduct = substr($request->product_id, 0, $posicion_coincidencia);

        $path = Storage::putFile('public/imgDeals', $request->file('image'));
        $url = Storage::url($path);

        $deal = new Deal;
        $deal->product_id = $idProduct;
        $deal->title = $request->title;
        $deal->subtitle = $request->subtitle;
        $deal->description = $request->description;
        $deal->image_url = $url;
        $deal->image_path = $path;
        $deal->likes = 0;
        $deal->save();

        return View('/deals/return-add')->with('deal', $deal);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   
        $pool = [];
        $deals = Deal::all();
        foreach ($deals as $deal) {
            $temp = [
                'title' => $deal->title,
                'subtitle' => $deal->subtitle,
                'image_url' => $deal->image_url,
                'description' => $deal->description
            ];

            array_push($pool, $temp);
        }
        return Array('deals'=>$pool);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        
        return View('/deals/return-edit')
        ->with('deal',Deal::find($id))
        ->with('products', Products::all());
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
            'title' => 'required|max:255|string',
            'subtitle' => 'required|max:255|string',
            'description' => 'required|string',
    
        ]);

        $posicion_coincidencia = strpos($request->product_id, '-', 0);
        $idProduct = substr($request->product_id, 0, $posicion_coincidencia);

        $deal = Deal::find($request->id);

        if (!empty($request->file('image'))) {
            $path = Storage::putFile('public/imgDeals', $request->file('image'));
            $url = Storage::url($path);
            $deal->image_url = $url;
            $deal->image_path = $path;
        }
        $deal->product_id = $idProduct;
        $deal->title = $request->title;
        $deal->subtitle = $request->subtitle;
        $deal->description = $request->description;
       
        $deal->save();

        return View('/deals/return-add')->with('deal', $deal);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deal = Deal::find($id);
        if($deal->delete()){
            return view('/deals/edit')->with('deals', Deal::all());
            
        }

    }
}
