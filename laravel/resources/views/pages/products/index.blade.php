@extends('base')

@section('content')
    <div class="row">
        <div class="col-sm-3 side" >
            <div class="sidebar-nav">
                <div class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <span class="visible-xs navbar-brand">Sidebar menu</span>
                    </div>
                    <div class="navbar-collapse collapse sidebar-navbar-collapse">
                        <ul class="nav navbar-nav">
                            @foreach($categories as $category)
                                <li><a href="#">{{ $category['category'] }}</a></li>
                            @endforeach

                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="col-sm-9">
    <h1 class="merchandise-title text-center">Sale</h1>
    <div class="animated pulse">
        <div class="slider">
            <div class="row">
                <div class="carousel slide" id="myCarousel">
                    <div class="carousel-inner">
                        <div class="item active">

                        </div>
                        @foreach($products as $product)
                            @if($product->is_sale)
                                <div class="item">
                                    <div class="col-xs-3" style="padding-left: 11px;">	<a href="{{ action("ProductController@show", $product['product_id']) }}" title="texto1">
                                            <img src="{{ $product['img']  }}" class="center-block" height="150px"/>
                                            <p class="lead text-center" style="padding-top: 20px;">&euro; {{ $product['price'] }}</p>
                                        </a>


                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>
                <a href="#myCarousel" data-slide="prev" class="pull-left sliderbutton fa fa-arrow-left fa-4x"></a>
                <a href="#myCarousel" data-slide="next" class="pull-right sliderbutton fa fa-arrow-right fa-4x"></a>
            </div>
        </div>

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
            </div>

        @endforeach
    </div>
    <div class="space"></div>
    </div>
    </div>



@endsection

@stop