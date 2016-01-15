<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home() {
        return view('pages/home');
    }

    public function products() {
        return view('pages/products');
    }

    public function contact() {
        return view('pages/contact');
    }

    public function about() {
        return view('pages/about');
    }

    public function product() {
        $id = $_GET['id'];
        return view('pages/game')->with($id);

    }

    public function cart() {
        $id = $_GET['id'];
        dd(view('pages/shop/cart')->with($id));
        return view('pages/shop/cart')->with($id);
    }

    public function data(Request $request) {
        $products = $request['products'];
        $user_id = \Auth::user()->id;
        $user = \App\User::where('id', $user_id)->first();
        return view('pages/shop/data', compact('user', 'products'));
    }
    public function pay() {
        $user_id = \Auth::user()->id;
        $products = $_GET['products'];
        $user = \App\User::where('id', $user_id)->first();
        if(!empty($_GET['address'])) {
        if($_GET['address'] == 1) {
            $address = array(
                'street'        => $user['street'],
                'city'          => $user['city'],
                'house_nr'      => $user['house_nr'],
                'postalcode'    => $user['postalcode']
            );
        } else if($_GET['address'] == 2) {
            $address = array(
                'street'        => $user['street2'],
                'city'          => $user['city2'],
                'house_nr'      => $user['house_nr2'],
                'postalcode'    => $user['postalcode2']
            );
        }} else {
            $address = array(
                'street'        => $user['street2'],
                'city'          => $user['city2'],
                'house_nr'      => $user['house_nr2'],
                'postalcode'    => $user['postalcode2']
            );
        }

        return view('pages/shop/pay', compact('products'), compact('address'));

    }
    public function invoice() {
        $user_id = \Auth::user()->id;
        $products = \App\Cart::where('id' , '=',  $user_id)
            ->where('paid', '=', NULL)
            ->get();
        $user = \App\User::where('id', $user_id)->first();

        $products->totalprice = 0;
        $products->total = 0;
        $products->btw = 0.21;

        foreach($products as $product) {
            $product->productInfo = \App\Product::where('product_id', '=', $product['product_id'])->first();
            $price = ($product->productInfo['price']);
            $products->total += $product->amount;
            $products->totalprice += $price * $product->amount;
        }
        return view('pages/shop/invoice', compact('products', 'user'));
    }






    public function admin() {
        return view('pages/admin/dashboard');
    }

    public function paid() {
        return view('pages/shop/paid');
    }




}

