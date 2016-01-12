@extends('base')

@section('content')
    <h1>{{ $product['name']  }}</h1>
    <h2>Stock: {{ $product['stock'] }}</h2>

    <form class="form-horizontal" action="{{action("CartController@store")}}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$product['product_id']}}">
        <div class="form-group">
            <label class="control-label">Amount</label>
            <div class="input-group">
                <span class="input-group-addon">#</span>
                <input type="number" class="form-control" min="1" value="1" name="amount">
                <span class="input-group-btn">
                    <input type="submit" class="btn btn-default" value="Add to cart">
                    {{--<button class="btn btn-default" type="button">Add to cart</button>--}}
                </span>
            </div>
        </div>
    </form>


@stop