@extends('adminBase')

@section('admin')

    <div class="show-products col-md-3">
        <h1>{{ $product->name }}</h1>
        <ul>
            <li><strong>Price:</strong> &euro; {{ $product->price }}</li>
            <li><strong>Stock:</strong> {{ $product->stock }}</li>
            <li><strong>On sale:</strong> @if($product->is_sale == 1) Yes @else No @endif</li>
            <li><strong>Description:</strong> {{ $product->description }}</li>
            <li><strong>Created at:</strong> {{ $product->created_at }}</li>
            <li><strong>Updated at:</strong> {{ $product->updated_at }}</li>
        </ul>
        <a class="btn btn-warning pull-left" href="{{ action("CmsProductsController@edit", $product->product_id) }}">Edit</a>
        <form class="pull-right" action="{{action("CmsProductsController@destroy", $product->product_id)}}" method="POST">
            {{ csrf_field() }}

            <input type="hidden" name="_method" value="delete">
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    </div>
    <div class="col-md-6" style="margin-top: 20px;;">
        <img src="{{ $product->img }}" alt="" width="500px" height="500px">
    </div>


@stop