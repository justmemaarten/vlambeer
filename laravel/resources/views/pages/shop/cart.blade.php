@extends('base')

@section('content')

    <h1>Shopping Cart</h1>
    <div class="row row-shopping-cart">

        @foreach ($products as $product)
            <div class="product col-md-3">
                <img class="cart-img" src="{{$product['productInfo']['img']}}" alt="">
                <p class="product-amount">{{$product['amount']}} x</p>


                <div class="form-group delete-cart-item">
                    <div class="input-group">
                        <input class="form-control" type="number" min="0" max="{{$product['amount']}}">
                        <span class="input-group-btn">
                          <input class="btn btn-primary" type="submit" value="Delete">
                        </span>
                    </div>
                </div>

                <div class="product-info">
                    <h4>Product info</h4>
                    <p class="product-price">
                        &#8364; {{$product['productInfo']['price']}}
                    </p>
                </div>
            </div>

        @endforeach

    </div>


    <div class="total-price">
        <div class="price-info">
            <p>Totaal prijs excl.({{$products->total}} artikelen)</p>
            <p>&#8364; {{$products->totalprice}}</p>
            <br>
            <p>BTW({{round((float)$products->btw * 100 )}}%)</p>
            <p>&#8364; {{$products->totalprice * $products->btw}}</p>
            <br>
            <p>Totaal prijs incl.</p>
            <p>&#8364; {{$products->totalprice * (1+$products->btw)}}</p>
        </div>
    </div>

    <input class="btn btn-primary pull-right pay-button" type="submit">

    @if($products->count())
        <div class="suggestions">
            <h2>Maybe you'd like:</h2>
            <div class="row">
                @foreach($suggestions as $suggestion)
                    <div class="col-md-2 suggestion">
                        <img src="{{$suggestion->img}}" alt="">

                        <div class="suggestion-info">
                            <h4>{{$suggestion->name}}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif


@stop