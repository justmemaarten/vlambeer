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
    public function show()
    {

        $user_id = \Auth::user()->id;

        $products = \App\Cart::where('id' , '=',  $user_id)
            ->where('paid', '=', NULL)
            ->get();

        //calculate sales tax
        $products->totalprice = 0;
        $products->total = 0;
        $products->btw = 0.21;
        $products->categories = [];
        $suggestions = [];
        $matchingSuggestions = [];
        $matchingSuggestionsTotal = 0;
        foreach($products as $product) {
            $product->productInfo = \App\Product::where('product_id', '=', $product['product_id'])->first();
            $price = ($product->productInfo['price']);
            $products->total += $product->amount;
            $products->totalprice += $price * $product->amount;

            $product->category = \App\Category::where('category_id', '=', $product->productInfo->category_id)->first();

            if (!in_array($product->category->category_id, $products->categories)) {
                array_push($products->categories, $product->category->category_id);
            }
        }

        foreach ($products->categories as $category){
            array_push($matchingSuggestions, \App\Product::where('category_id', '=', $category)->get());
            $matchingSuggestionsTotal += count(\App\Product::where('category_id', '=', $category)->get());
        }


        $max = 5;

        if ($matchingSuggestionsTotal <= 5) {
            $max = $matchingSuggestionsTotal;
        }

        for ($i = 0; $i < $max; $i++){

            do {
                $randomindex = rand(0, count($matchingSuggestions)-1);
                $randomvalue = rand(0, count($matchingSuggestions[$randomindex])-1);
            } while (in_array($matchingSuggestions[$randomindex][$randomvalue], $suggestions));
            array_push($suggestions, $matchingSuggestions[$randomindex][$randomvalue]);
        }

        unset($max);

        return view('pages/shop/cart', compact('products', 'suggestions'));
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
