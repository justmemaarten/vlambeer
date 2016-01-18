@extends('base')

@section('content')
    <h1 class="merchandise-title">Sale</h1>
        <div class="col-md-12">
            <div class="carousel slide" id="product">
                <div class="carousel-inner">
                    @foreach($products as $product)
                        @if($product->is_sale)
                    <div class="item">
                        <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                            <a class="product-link" href={{ action("ProductController@show", $product['product_id']) }}>
                                <h1 class="merchandise-name">{{ $product['name']  }}</h1>
                            </a>
                            <a href="#"><img src="{{ $product['img'] }}" class="img-responsive">2</a></div>
                        <p class="pull-right merchandise-price">&euro; {{ $product['price'] }}</p>
                    </div>
                        @endif
                    @endforeach
                </div>
                <a class="left carousel-control" href="#product" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                <a class="right carousel-control" href="#product" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
            </div>
        </div>
    <div class="animated pulse">

        @foreach($products as $product)
            @if($product->is_sale)
                <div class="col-lg-3-store merchandise-product">
                    <a class="product-link" href={{ action("ProductController@show", $product['product_id']) }}>
                        <h1 class="merchandise-name">{{ $product['name']  }}</h1>
                    </a>
                    <a class="product-link" href={{ action("ProductController@show", $product['product_id']) }}>
                        <img class="merchandise-img" src="{{ $product['img']  }}" alt="">
                    </a>
                    <p class="pull-right merchandise-price">&euro; {{ $product['price'] }}</p>
                    <p class="pull-right merchandise-description">{{ $product['description'] }}</p>
                </div>
            @endif
        @endforeach
    </div>
    <div class="space"></div>
    <h1 class="merchandise-title">Products</h1>

    <div class="animated pulse">
        @foreach($products as $product)

            <div class="col-lg-3-store merchandise-product">
                <a class="product-link" href={{ action("ProductController@show", $product['product_id']) }}>
                    <h1 class="merchandise-name">{{ $product['name']  }}</h1>
                </a>
                <a class="product-link" href={{ action("ProductController@show", $product['product_id']) }}>
                    <img class="merchandise-img" src="{{ $product['img']  }}" alt="">
                </a>
                <p class="pull-right merchandise-price">&euro; {{ $product['price'] }}</p>
                <p class="pull-right merchandise-description">{{ $product['description'] }}</p>
            </div>

        @endforeach
    </div>
    <div class="space"></div>
@endsection

@stop