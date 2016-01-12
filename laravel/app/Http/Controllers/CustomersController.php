<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = \App\User::orderBy('id')->get();
        return view('pages/admin/Customers/customers', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/admin/Customers/add');
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
            'username'          => 'required|max:32|string',
            'firstname'         => 'required|string',
            'lastname'          => 'required|string',
            'insertion'         => 'string',
            'phone_nr'          => 'string',
            'birhdate'          => 'date',
            'isadmin'           => 'required|boolean',
            'hasnewsletter'     => 'required|boolean',
            'city'              => 'required|string',
            'street'            => 'required|string',
            'house_nr'          => 'required|string',
            'postalcode'        => 'required|string',
            'city2'             => 'string',
            'street2'           => 'string',
            'house_nr2'         => 'string',
            'postalcode2'       => 'string',
            'email'             => 'required|email',
            'password'          => 'required|password'
        ]);

        $user = \App\User::create($request->except('_token'));

        return Redirect('user')->with('message', 'Customer created succesfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //haal orders hier binnen
        $customer = \App\User::orderBy('id')->where('id', $id)->first();
        return view('pages/admin/Customers/show', compact('customer'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = \App\User::where('id', $id)->first();
        return view('pages/admin/Customers/edit', compact('customer'));
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
            'username'          => 'required|max:32|string',
            'firstname'         => 'required|string',
            'lastname'          => 'required|string',
            'insertion'         => 'string',
            'phone_nr'          => 'string',
            'birhdate'          => '',
            'isadmin'           => '',
            'hasnewsletter'     => '',
            'city'              => '',
            'street'            => '',
            'house_nr'          => '',
            'postalcode'        => '',
            'city2'             => '',
            'street2'           => '',
            'house_nr2'         => '',
            'postalcode2'       => '',
            'email'             => '',
            'password'          => ''



        ]);

        $product = \App\Product::find($id);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;

        $product->save();


        return Redirect('products')->with('message', 'Product changed succesfully');
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
