<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CmsProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = \App\product::orderBy('product_id')->get();
        $categories = \App\Category::all();
        return view('pages/admin/eCommerce/products/index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = \App\Category::all();
        return view('pages/admin/eCommerce/products/add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required|max:32|string',
            'price'         => 'required|numeric',
            'img'           => 'required|string',
            'description'   => 'required|string',
            'stock'         => 'required|numeric',
            'is_sale'       => 'required|numeric',
            'category_id'   => 'required|exists:tbl_categories,category_id'
        ]);

        $product = \App\Product::create($request->except('_token'));

        return Redirect('admin/eCommerce/products')->with('message', 'Product created succesfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = \App\Product::where('product_id', $id)->first();
        $categories = \App\Category::all();
        return view('pages/admin/eCommerce/products/show', compact('product', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = \App\Product::where('product_id', $id)->first();
        $categories = \App\Category::all();
        return view('pages/admin/eCommerce/products/edit', compact('product', 'categories'));
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
        $this->validate($request, [
            'name'          => 'required|max:32|string',
            'price'         => 'required|numeric',
            'img'           => 'required|string',
            'description'   => 'required|string',
            'stock'         => 'required|numeric',
            'is_sale'       => 'required|numeric',
            'category_id'   => 'required|exists:tbl_categories,category_id'
        ]);

        $product = \App\Product::find($id);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->img = $request->img;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->is_sale = $request->is_sale;
        $product->category_id = $request->category_id;

        $product->save();

        return Redirect('admin/eCommerce/products')->with('message', 'Product changed succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = \App\Product::find($id);
        $product->delete();
        return Redirect('admin/eCommerce/products')->with('message', 'Product deleted succesfully');
    }
}
