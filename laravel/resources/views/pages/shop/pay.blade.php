@extends('base')

@section('content')

    <h1>Shipping address:</h1>
    <h3>{{ $address['street'] }} {{ $address['house_nr'] }}, {{ $address['postalcode'] }}, {{ $address['city'] }}</h3>

<div class="pay pull-right">
    <h2>Paying methods:</h2>
    <br>
    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
        <input id="element-to-hide" type="hidden" name="cmd" value="_xclick">
        <input id="element-to-hide" type="hidden" name="return" value="http://vlambeer.dev/cart/paid">
        <input id="element-to-hide" type="hidden" name="cancel_return" value="http://vlambeer.dev/shop/cart">
        <input id="element-to-hide" type="hidden" name="business" value="pay@vlambeer.nl">
        <input id="element-to-hide" type="hidden" name="item_name" value="Merchandise Payment">
        <input id="element-to-hide" type="hidden" name="currency_code" value="EUR">
        <input id="element-to-hide" type="hidden" name="amount" value="5">
        <input id="element-to-hide" type="hidden" name="hosted_button_id" value="8K9EUGGB9TTYU">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/nl_NL/i/scr/pixel.gif" width="1" height="1">
    </form>
    <br>
    <a target="_blank" href="{{ action("PagesController@invoice") }}" class="btn btn-primary pull-right">Show Invoice</a>
</div>
@stop