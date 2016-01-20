<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{



    private $contents = array();

    #   Important! Change this value for redistribution!
    const PASSWORD_KEY              = 'yhXNtihx4vflNZgbvwfwLTEku';

    #   Important! Change this value for redistribution! Can only contain a-f, 0-9 and must be this exact length!
    const SESSION_KEY               = 'bc204c7a10324cd8b5276051cef08bc2f2ade029fdebfe5f1d317e2ffb2a05a3';


    public function __construct() {

        if ( empty( $_SESSION['cart'] ) )
        {
            $_SESSION['cart'] = array();
        }

        $this->contents = $this->getCartSession();
    }


    public function __destruct() {

        $this->setCartSession($this->contents);
    }


    /**
     *
     *      Public setter for the user session.
     *      The encryption used below is RIJNDAEL MANAGED with a 256-bit block-cipher,
     *      more commonly known as AES ( Advanced Encryption Standerd ), as adopted by NIST.
     *
     *      Explaining the encryption below is not necessary,
     *      its safe and this example may be adapted and copy pasted as you like.
     *
     *  @return bool|User
     */
    public final function setCartSession( $input )
    {
        $sPlain                 = serialize( $input );

        $sKey                   = pack( 'H*', static::SESSION_KEY );
        $sInitVector            = mcrypt_create_iv( 32, MCRYPT_RAND );
        $sEncrypted             = mcrypt_encrypt(
            MCRYPT_RIJNDAEL_256,
            $sKey,
            $sPlain,
            MCRYPT_MODE_CBC,
            $sInitVector
        );

        $_SESSION['cart'] = base64_encode( $sInitVector . $sEncrypted );
    }


    /**
     *
     *      Public getter for the user session.
     *      The encryption used below is RIJNDAEL MANAGED with a 256-bit block-cipher,
     *      more commonly known as AES ( Advanced Encryption Standerd ), as adopted by NIST.
     *
     *      Explaining the encryption below is not necessary,
     *      its safe and this example may be adapted and copy pasted as you like.
     *
     *  @return bool|User
     */
    public final function getCartSession()
    {
        $cart = $_SESSION['cart'];
        if ( !empty ($cart) )
        {
            $sKey                   = pack( 'H*', static::SESSION_KEY );
            $sEncrypted             = base64_decode( $cart );

            $sPlain                 = mcrypt_decrypt(
                MCRYPT_RIJNDAEL_256,
                $sKey,
                substr( $sEncrypted, 32 ),
                MCRYPT_MODE_CBC,
                substr(  $sEncrypted, 0, 32 )
            );

            return unserialize( $sPlain );
        }

        return false;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $this->contents[5] = ['amount' => 9];
//        $this->contents[7] = ['amount' => 11];

        $suggestions = [];
        $matchingSuggestions = [];
        $products = [];

        if($this->contents != null) {
            //retrieving product data based on session product id's
            foreach ($this->contents as $product => $data) {

                $products[$product] = \App\Product::where('product_id', $product)->first();

                $products[$product]['amount'] = $this->contents[$product]['amount'];

            }

            if (!empty($products)) {
                //defining array items
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

//        dump($products);
                foreach ($products['categories'] as $category) {
//                dump(\App\Product::where('category', '=', $category)->first());
//                die();
                    $data = \App\Product::where('category_id', '=', $category)->get();
                    array_push($matchingSuggestions, $data);
//                $matchingSuggestionsTotal += count($data);
                }
                $max = 5;

                if (count($matchingSuggestions) <= 5) {
                    $max = count($matchingSuggestions);
                }

//        dd($matchingSuggestions);

                for ($i = 0; $i < $max; $i++) {

                    do {
                        $randomindex = rand(0, count($matchingSuggestions) - 1);
                        $randomvalue = rand(0, count($matchingSuggestions[$randomindex]) - 1);
                    } while (in_array($matchingSuggestions[$randomindex][$randomvalue], $suggestions));
                    array_push($suggestions, $matchingSuggestions[$randomindex][$randomvalue]);

                }

                unset($max);
            }

        }
        return view('pages/shop/cart', compact('products', 'suggestions'));

//        dump($products);
//        dump($suggestions);
//        die();


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create($product_id, $id)
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
//        $json = ["products"["id" => "1","amount"=> "1"], ["id"=> "3","amount"=> "2"]];
//        $json = json_encode($json);
//        dump($json);
//
//        $json = json_decode($json);
//        dd($json);
//
//        $input = [
//            'id' => $_POST['id'],
//            'amount' => $_POST['amount']
//        ];
//
//        dump($encoded = json_encode($input));
//
//        session()->push('products', $encoded);
//
//        if(!$products = session()->pull('products')){
//            $products = [];
//        }


//        dd(json_decode($products[0]));


//        $input = [
//            'id' => $_POST['id'],
//            'amount' => $_POST['amount']
//        ];
//
//        $encoded = json_encode($input);
//
//        session()->push('products', $encoded);



//        $array = [];
//        if($products = session()->pull('products')){
//            foreach($products as $product) {
//                if(!in_array(json_decode($product), $array)){
//                    array_push($array, json_decode($product));
//                }
//            }
//        }
//
//        $input = [
//            'id' => $_POST['id'],
//            'amount' => $_POST['amount']
//        ];
//
//        if(!in_array($input['id'], $array)) {
//            array_push();
//        }



//        dd($array);
//
//
//        $encoded = json_encode($array);

//        session()->push('products', $encoded);
//        dump(session()->all());
//        $products = session()->pull('products');
//        foreach($products as $product) {
//            dump(json_decode($product));
//        }
////        dump(json_decode(session('products')));
//        dump(session()->all());

//        die();
//
//
//        dd( $request );

        if(!isset($this->contents[$_POST['id']])) {
            $this->contents[$_POST['id']] = ['amount' => $_POST['amount']];
        } else {
            $this->contents[$_POST['id']]['amount'] += $_POST['amount'];
        }
//
        $msg = 'Product added to the cart succesfully!';
//        if(!isset(\Auth::user()->id)) {
//            $msg .= ' Please Register/Login to check your cart';
//        }

        return redirect('products')->with('message', $msg);
//        return view('pages/products');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show()
    {
        //
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
        $this->contents[$id] = ['amount' => $_POST['amount']];

        return redirect('shop/cart');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        unset($this->contents[$id]);

        return redirect('shop/cart');
    }
}
