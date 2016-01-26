<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public $cartContents;

    public function home() {
        $cart = new cartController();
        $cartContents = $cart->getCartSession();

        return view('pages/home', compact('cartContents'));
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

    public function mail() {
        return view('pages/contact');
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

        $cart = new cartController();
        $cartContents = $cart->getCartSession();
        $user_id = \Auth::user()->id;
        //$products = $_GET['products'];
        $user = \App\User::where('id', $user_id)->first();

        foreach ($cartContents as $product => $data) {

            $products[$product] = \App\Product::where('product_id', $product)->first();

            $products[$product]['amount'] = $cartContents[$product]['amount'];

        }
        $products['total'] = 0;
        $products['totalprice'] = 0;
        $products['categories'] = [];
        $products['btw'] = 0.21;


        //filling array items
        foreach ($products as $product => $data) {
            if (isset($data['category_id'])) {
                $products['total'] += $products[$product]['amount'];
                $products['totalprice'] += $products[$product]['amount'] * $products[$product]['price'];


                $category = \App\Category::where('category_id', '=', $data['category_id'])->pluck('category_id');

                if (!in_array($category, $products['categories'])) {
                    array_push($products['categories'], $category);
                }

            }

        }
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

        return view('pages/shop/pay', compact('address', 'products'));

    }
    public function invoice() {
        $user = \Auth::user();

        $cart = new cartController();
        $cartContents = $cart->getCartSession();

        $user_id = \Auth::user()->id;
        //$products = $_GET['products'];
        $user = \App\User::where('id', $user_id)->first();

        foreach ($cartContents as $product => $data) {

            $products[$product] = \App\Product::where('product_id', $product)->first();

            $products[$product]['amount'] = $cartContents[$product]['amount'];

        }
        $products['total'] = 0;
        $products['totalprice'] = 0;
        $products['categories'] = [];
        $products['btw'] = 0.21;


        //filling array items
        foreach ($products as $product => $data) {
            if (isset($data['category_id'])) {
                $products['total'] += $products[$product]['amount'];
                $products['totalprice'] += $products[$product]['amount'] * $products[$product]['price'];


                $category = \App\Category::where('category_id', '=', $data['category_id'])->pluck('category_id');

                if (!in_array($category, $products['categories'])) {
                    array_push($products['categories'], $category);
                }

            }

        }
        return view('pages/shop/invoice', compact('address', 'products', 'user'));
    }






    public function admin() {
        return view('pages/admin/dashboard');
    }

    public function paid() {
        $user_id = \Auth::user()->id;
        $cart = new cartController();
        $date = date('Y/m/d H:i:s');
        $cartContents = $cart->getCartSession();
        $carttable = \App\Cart::orderBy('id', 'DESC')->first();
        $orderid = $carttable['id'] + 1;
        foreach($cartContents as $product => $data) {
        $orderdata = [
            'id'            => $orderid,
            'user_id'       => $user_id,
            'product_id'    => $product,
            'amount'        => $data['amount'],
            'paid'          => $date,
            'status'        => 'paid'
        ];
            $order = \App\Cart::create($orderdata);

            $product = \App\Product::where('product_id', $product)->first();
            $product->stock = $product->stock - $data['amount'];
            $product->save();
            $cart->destroy($product);
        }

        return view('pages/shop/paid');
    }




}

