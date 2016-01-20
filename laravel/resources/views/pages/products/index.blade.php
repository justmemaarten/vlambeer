@extends('base')

@section('content')
    <h1 class="merchandise-title">Sale</h1>
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
    <div class="slider">
        <div class="row">
            <div class="carousel slide" id="myCarousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="col-xs-3" style="padding-left: 11px;">	<a href="#" title="texto1"> <img
                                        src="http://musiccaptains.com/zh/wp-content/uploads/2012/09/Account.png" class="center-block"
                                />
                            </a>

                            <p class="lead text-center" style="padding-top: 20px;">texto 1</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-3" style="padding-left: 11px;">	<a href="#" title="texto1"> <img
                                        src="http://musiccaptains.com/zh/wp-content/uploads/2012/09/Account.png" class="center-block"
                                />
                            </a>

                            <p class="lead text-center" style="padding-top: 20px;">texto 2</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-3" style="padding-left: 11px;">	<a href="#" title="texto1"> <img
                                        src="http://musiccaptains.com/zh/wp-content/uploads/2012/09/Account.png" class="center-block"
                                />
                            </a>

                            <p class="lead text-center" style="padding-top: 20px;">texto 3</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-3" style="padding-left: 11px;">	<a href="#" title="texto1"> <img
                                        src="http://musiccaptains.com/zh/wp-content/uploads/2012/09/Account.png" class="center-block"
                                />
                            </a>

                            <p class="lead text-center" style="padding-top: 20px;">texto 4</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-3" style="padding-left: 11px;">	<a href="#" title="texto1"> <img
                                        src="http://musiccaptains.com/zh/wp-content/uploads/2012/09/Account.png" class="center-block"
                                />
                            </a>

                            <p class="lead text-center" style="padding-top: 20px;">texto 5</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-3" style="padding-left: 11px;">	<a href="#" title="texto1"> <img
                                        src="http://musiccaptains.com/zh/wp-content/uploads/2012/09/Account.png" class="center-block"
                                />
                            </a>

                            <p class="lead text-center" style="padding-top: 20px;">texto 6</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-3" style="padding-left: 11px;">	<a href="#" title="texto1"> <img
                                        src="http://musiccaptains.com/zh/wp-content/uploads/2012/09/Account.png" class="center-block"
                                />
                            </a>

                            <p class="lead text-center" style="padding-top: 20px;">texto 7</p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>

            <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>

        </div>
    </div>


@endsection

@stop