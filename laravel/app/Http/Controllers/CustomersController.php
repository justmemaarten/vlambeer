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
            'username'          => 'required|max:255|unique:tbl_users',
            'email'             => 'required|email|max:255|unique:tbl_users',
            'firstname'         => 'required|string',
            'lastname'          => 'required|string',
            'insertion'         => 'string',
            'phone_nr'          => 'string',
            'birhdate'          => 'date',
            'isadmin'           => 'required|boolean',
            'city'              => 'required|string',
            'street'            => 'required|string',
            'house_nr'          => 'required|string',
            'postal_code'       => 'required|string',
            'city2'             => 'string',
            'street2'           => 'string',
            'house_nr2'         => 'string',
            'postal_code2'      => 'string'
        ]);

        $customer = \App\User::create($request->except('_token'));

        return Redirect('admin/Customers/customers')->with('message', 'Customer created succesfully!');
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
        return view('admin/Customers/show', compact('customer'));
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
            'birthdate'         => 'date',
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
            'email'             => 'required|email'
        ]);

        $user = \App\Product::find($id);

        $user->username = $request->username;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->insertion = $request->insertion;
        $user->phone_nr = $request->phone_nr;
        $user->birthdate = $request->birthdate;
        $user->isadmin = $request->isadmin;
        $user->hasnewsletter = $request->hasnewsletter;
        $user->city = $request->city;
        $user->street = $request->street;
        $user->house_nr = $request->house_nr;
        $user->postalcode = $request->postalcode;
        $user->city2 = $request->city2;
        $user->street2 = $request->street2;
        $user->house_nr2 = $request->house_nr2;
        $user->postalcode2 = $request->postalcode2;

        $user->save();


        return Redirect('pages/admin/Customers/customers')->with('message', 'Product changed succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = \App\User::find($id);
        $customer->delete();
        return Redirect('admin/Customers/customers')->with('message', 'Product deleted succesfully');
    }

}
