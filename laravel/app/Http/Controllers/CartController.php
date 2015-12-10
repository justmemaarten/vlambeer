<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ophalen alle producten (met id's) waarbij paid null is
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($product_id, $id)
    {
        //user_id ophalen
        //$product_id ophalen die geen paid heeft
        //die tonen
        $product = \App\Product::where('product_id', $product_id)->all();
        $user = \App\Cart::where('id', $id)->first();//user_id ophalen vanuit session

//        @foreach($products as $product)
//            <h2>{{$product->name}} </h2>
//            <p>{{$product->price}}</p>
//        @endforeach
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($product_id)
    {
        //retrieve data
        $products = \App\Product::where('product_id', $product_id)->all();
        //calculate sales tax
        foreach($products as $product) {
            $price = ($products->price);
            $tax = 0.21;
            $pricetax = ($price * 1.21);
            $products->pricetax = $pricetax;

        }
        $products->totalprice = \App\Product::find($product_id)->assets()->sum('price') * ($tax +1);

        return view('shop/cart', compact('products'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
