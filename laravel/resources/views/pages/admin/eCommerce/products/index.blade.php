@extends('adminBase')

@section('admin')

    <div class="main-content">
        <h1>Customers</h1>
        <table class="top-information table table-striped table-hover sortable">
            <thead style="font-weight: bold">
            <tr>
                <td>ID</td>
                <td>Product name</td>
                <td>Price</td>
                <td>Image</td>
                <td>stock</td>
                <td>Edit / Delete</td>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td class="order-information">{{$product->product_id}}</td>
                    <td class="order-information">{{$product->name}}</td>
                    <td class="order-information">&euro; {{$product->price}}</td>
                    <td class="order-information">{{$product->img}}</td>
                    <td class="order-information">{{$product->stock}}</td>
                    <td class="order-information"><a href="{{ action("CmsProductsController@edit", $product->id) }}">Edit</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@stop