@extends('base')

@section('content')

<div class="animated pulse">
@foreach($products as $product)

        <div class="col-lg-3-store merchandise-product">
            <a class="product-link" href={{ action("ProductController@show", $product['product_id']) }}>
                <h1 class="merchandise-name">{{ $product['name']  }}</h1>
                <img class="merchandise-img" src="{{ $product['img']  }}" alt="">
                <p class="pull-right merchandise-price">&euro; {{ $product['price'] }}</p>
                <input type="submit" value="Order" class="auth-btn order-btn">
                <p class="pull-right merchandise-description">{{ $product['description'] }}</p>
            </a>
        </div>

@endforeach
</div>
<div class="space"></div>
@endsection

@stop