@extends('adminBase')

@section('admin')

    <div class="main-content">
        <h1 class="pull-left">Products</h1>
        <a class="pull-right btn btn-success" style="margin-top: 30px;" href="{{ action('CmsProductsController@create') }}">Add</a>
        @if(!empty(Session::get('message')))
            <ul>
                <li style="clear: both; width: 95%;" class="list-group-item list-group-item-success">{{ Session::get('message')}}</li>
            </ul>
        @endif
        <table class="top-information table table-striped table-hover sortable">
            <thead style="font-weight: bold">
            <tr>
                <td>ID</td>
                <td>Product name</td>
                <td>Price</td>
                <td>On sale</td>
                <td>Stock</td>
                <td>Image</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->product_id}}</td>
                    <td><a href="{{ action("CmsProductsController@show", $product->product_id) }}">{{$product->name}}</a></td>
                    <td>&euro; {{$product->price}}</td>
                    <td>@if($product->is_sale == 1) Yes @else No @endif</td>
                    <td>{{$product->stock}}</td>
                    <td style="white-space: normal; width: 40%;">{{$product->img}}</td>
                    <td><a class="btn btn-warning" href="{{ action("CmsProductsController@edit", $product->product_id) }}">Edit</a></td>
                    <td><form action="{{action("CmsProductsController@destroy", $product->product_id)}}" method="POST">
                        {{ csrf_field() }}

                        <input type="hidden" name="_method" value="delete">
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@stop