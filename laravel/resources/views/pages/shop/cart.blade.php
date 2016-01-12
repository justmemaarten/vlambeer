@extends('base')

@section('content')

    <h1>Shopping Cart</h1>
    @if(isset($products))
        <div class="row row-shopping-cart">
            <table class="table table-striped table-hover col-md-12">
                @foreach ($products as $product => $data)
                    @if(isset($products[$product]['product_id']))
                        {{ $product['product_id'] }}
                        <tr class="cartproduct">
                            <td class="pull-left">
                                <form action="{{action("CartController@destroy", $products[$product]['product_id'])}}" method="post">
                                    <input type="hidden" name="_method" value="delete">
                                    {{csrf_field()}}
                                    <input type="submit" class="btn btn-primary" value="Delete">
                                </form>
                            </td>
                            <td class="pull-left">
                                <img src="{{$data['img']}}" alt="">
                            </td>
                            <td class="pull-left">
                                <h3>{{$data['name']}}</h3>
                            </td>
                            <td class="pull-right price">
                                <p class="product-price">
                                    &#8364; {{$data['price']}}
                                </p>
                            </td>
                            <td class="pull-right amount">
                                <form action="{{action("CartController@update", $products[$product]['product_id'])}}" method="post">
                                    <input type="hidden" name="_method" value="put">
                                    {{ csrf_field() }}

                                    <div class="input-group">
                                        <span class="input-group-addon">#</span>
                                        <input type="number" class="form-control" min="1" value="{{$data['amount']}}" name="amount">
                                    <span class="input-group-btn">
                                        <input type="submit" class="btn btn-default" value="Edit amount">
                                    </span>
                                    </div>
                                </form>
                            </td>
                        </tr>

                    @endif
                @endforeach
            </table>


        </div>


        <div class="total-price">
            <div class="price-info">
                <p>Totaal prijs excl.({{$products['total']}} artikelen)</p>
                <p>&#8364; {{$products['totalprice']}}</p>
                <br>
                <p>BTW({{round((float)$products['btw'] * 100 )}}%)</p>
                <p>&#8364; {{$products['totalprice'] * $products['btw']}}</p>
                <br>
                <p>Totaal prijs incl.</p>
                <p>&#8364; {{$products['totalprice'] * (1+$products['btw'])}}</p>
            </div>
        </div>
        @if (Auth::check())
            <a href="{{ action("PagesController@data") }}" class="btn btn-primary pull-right pay-button" type="submit">Next</a>
        @else
            <div class="pull-right">
                <h4>Please <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login-register">
                        Login
                    </button> to order products.</h4>
            </div>
        @endif

        @if(count($products))
            <div class="suggestions">
                <h2>Maybe you'd like:</h2>
                <div class="row">
                    @foreach($suggestions as $suggestion)
                        <div class="col-md-2 suggestion">
                            <img src="{{$suggestion['img']}}" alt="">

                            <div class="suggestion-info">
                                <h4>{{$suggestion['name']}}</h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    @else
        <div class="row row-shopping-cart">
            <h4>There are no items in your cart! please head to the <a href="{{action('ProductController@index')}}">store</a> to add items to your shopping cart.</h4>
        </div>
    @endif



@stop