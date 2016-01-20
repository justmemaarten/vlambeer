@extends('base')

@section('content')
    <div class="row">
        <div class="col-sm-3">
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
            <img class="pull-left product-img" src="{{ $product['img'] }}" alt="" height="250">

            <h1>{{ $product['name'] }}</h1>
            <p>{{ $product['description'] }}</p>
            <p>{{ $product['price'] }}</p>
            <p>Stock: {{ $product['stock'] }}</p>

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
        </div>
    </div>



@stop