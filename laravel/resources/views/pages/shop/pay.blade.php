@extends('base')

@section('content')

    <h1>Shipping address:</h1>
    <h3>{{ $address['street'] }} {{ $address['house_nr'] }}, {{ $address['postalcode'] }}, {{ $address['city'] }}</h3>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>
            <h4>Product</h4>
        </th>
        <th>
            <h4>Description</h4>
        </th>
        <th>
            <h4>Amount</h4>
        </th>
        <th>
            <h4>Price</h4>
        </th>
        <th>
            <h4>Sub Total</h4>
        </th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <?php $productI = \App\Product::where('product_id', $product['product_id'])->first() ?>
        <tr>
            <td>{{ $productI['name'] }}</td>
            <td>{{ $productI['description'] }}</td>
            <td class="text-right">{{ $product->amount }}</td>
            <td class="text-right">{{ $productI->price }}</td>
            <td class="text-right">{{ $product->amount * $productI->price }}</td>
        </tr>
    @endforeach

    </tbody>
</table>
<div class="row text-right">
    <div class="col-xs-2 col-xs-offset-8">
        <p>
            <strong>
                Sub Total : <br>
                TAX : <br>
                Total : <br>
            </strong>
        </p>
    </div>
    <div class="col-xs-2">
        <strong>
            {{ $products->totalprice }} <br>
            {{round((float)$products->btw * 100 )}}% <br>
            {{$products->totalprice * (1+$products->btw)}} <br>
        </strong>
    </div>
</div>
<div class="pay pull-right">
    <h2>Paying methods:</h2>
    <br>
    <form id="element-to-hide" action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="business" value="jorritjeah@gmail.com">
        <input type="hidden" name="item_name" value="Merchandise Payment">
        <input type="hidden" name="currency_code" value="EUR">
        <input type="hidden" name="amount" value="{{ $products->totalprice }}">
        <input type="hidden" name="hosted_button_id" value="8K9EUGGB9TTYU">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/nl_NL/i/scr/pixel.gif" width="1" height="1">
    </form>
    <br>
    <a target="_blank" href="{{ action("PagesController@invoice") }}" class="btn btn-primary pull-right">Show Invoice</a>
</div>
@stop