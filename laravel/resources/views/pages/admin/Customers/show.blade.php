@extends('adminBase')

@section('admin')

    <div class="show-products col-md-3">
        <h1>{{ $customer->firstname . ' ' . $customer->insertion . ' ' .  $customer->lastname }}</h1>
        <ul>
            <li><strong>Username:</strong> {{ $customer->username }}</li>
            <li><strong>Email:</strong> {{ $customer->email }}</li>
            <li><strong>Phone number:</strong> {{ $customer->phone_nr }}</li>
            <li><strong>Birthdate:</strong> {{ $customer->birthdate }}</li>
            <h5 style="text-align: center">First address:</h5>
            <li><strong>Street:</strong> {{ $customer->street }}</li>
            <li><strong>House number:</strong> {{ $customer->house_nr }}</li>
            <li><strong>Postal code:</strong> {{ $customer->postalcode }}</li>
            <h5 style="text-align: center">Second address:</h5>
            <li><strong>Street 2:</strong> {{ $customer->street2 }}</li>
            <li><strong>House number 2:</strong> {{ $customer->house_nr2 }}</li>
            <li><strong>Postal code 2:</strong> {{ $customer->postalcode2 }}</li>
            <h5></h5>
            <li><strong>Is admin:</strong>@if($customer->isadmin == 0) No @else Yes @endif</li>


            <li><strong>Created at:</strong> {{ $customer->created_at }}</li>
            <li><strong>Updated at:</strong> {{ $customer->updated_at }}</li>
        </ul>
        <a class="btn btn-warning pull-left" href="{{ action("CmsProductsController@edit", $customer->product_id) }}">Edit</a>
        <form class="pull-right" action="{{action("CmsProductsController@destroy", $customer->product_id)}}" method="POST">
            {{ csrf_field() }}

            <input type="hidden" name="_method" value="delete">
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    </div>
    <div class="col-md-6" style="margin-top: 20px;;">
        <img src="{{ $customer->img }}" alt="" width="500px" height="500px">
    </div>


@stop