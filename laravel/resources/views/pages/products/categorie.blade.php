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
                                <li><a href="{{ action('ProductController@categorie', ['category' => $category['category_id']]) }}">{{ $category['category'] }}</a></li>
                            @endforeach

                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            @foreach($categories as $category)
                @if($category['category_id'] == $id)
                <h2 class="text-center">{{ $category['category'] }}</h2>
                @endif
            @endforeach
            <div class="animated pulse">
                @foreach($products as $product)
                    @if($product['category_id'] == $id)
                        <div class="col-lg-3-store merchandise-product">
                            <a class="product-link" href={{ action("ProductController@show", $product['product_id']) }}>
                                <h4 class="merchandise-name">{{ $product['name']  }}</h4>
                            </a>
                            <a class="product-link" href={{ action("ProductController@show", $product['product_id']) }}>
                                <img class="merchandise-img" src="{{ $product['img']  }}" alt="" height="200px">
                            </a>
                            <p class="pull-right merchandise-price">&euro; {{ $product['price'] }}</p>
                        </div>
                    @endif
                @endforeach
            </div>
    </div>
    </div>

@stop