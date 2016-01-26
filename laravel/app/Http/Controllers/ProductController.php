<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $products = \App\Product::all();
        $categories = \App\Category::all();
        return view('pages/products/index',compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function sale() {
//        $sale_products  = \App\Product::where('is_sale', 1)->first();
//        echo $sale_products; die;
//        return view('pages/products/index',compact('sale_products'));
//    }

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
        $sizes = explode(',', $product['size']);
        $sizes = array_filter($sizes);
        $categories = \App\Category::all();
        return view('pages/products/show',compact('product', 'categories', 'sizes'));
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
        $products = \App\Cart::where('product_id', $id);
        for ($i=0; $i <= count($products); $i++) {
            $product = \App\Product::where('product_id', $products[$i]['product_id'])->first();
            $newstock = $product['stock'] - $products[$i]['amount'];
            DB::update('update tbl_products set stock = ? where product_id = ?', array($newstock , $product['product_id']));
        }
       // return redirect('products')->with('message', 'payment succesfully');
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
    public function categorie()
    {
        $id = (int) $_GET['category'];
        $products = \App\Product::all();
        $categories = \App\Category::all();
        return view('pages/products/categorie',compact('products', 'categories', 'id'));

    }
}
