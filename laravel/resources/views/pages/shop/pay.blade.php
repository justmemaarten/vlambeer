@extends('base')

@section('content')

<h2>Total price: &euro;  {{ $products->totalprice }}</h2>
<h4>Paying methods:</h4>

<form id="element-to-hide" action="https://www.paypal.com/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="jorrit-meeuwissen@hotmail.com">
    <input type="hidden" name="item_name" value="Merchandise Payment">
    <input type="hidden" name="currency_code" value="EUR">
    <input type="hidden" name="amount" value="{{ $products->totalprice }}">
    <input type="hidden" name="hosted_button_id" value="8K9EUGGB9TTYU">
    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.paypalobjects.com/nl_NL/i/scr/pixel.gif" width="1" height="1">
</form>

<a target="_blank" href="{{ action("PagesController@invoice") }}" class="btn btn-primary pull-right">Show Invoice</a>

@stop