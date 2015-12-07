@extends('base')

@section('content')



    <h1>Shopping Cart</h1>
    <div class="row row-shopping-cart">
        <div class="product col-md-3">
            <img class="cart-img" src="http://www.lorempixel.com/329/230" alt="">
            <div class="product-price">
                <h4>Product info</h4>
            </div>
        </div>
        <div class="product col-md-3">
            <img class="cart-img" src="http://www.lorempixel.com/329/230" alt="">
            <div class="product-price">
                <h4>Product info</h4>
            </div>
        </div>
        <div class="product col-md-3">
            <img class="cart-img" src="http://www.lorempixel.com/329/230" alt="">
            <div class="product-price">
                <h4>Product info</h4>
            </div>
        </div>
    </div>


    <div class="total-price">
        <div class="price-info">
            <p>Totaal aantal artikelen (<!-- Het totaal aantal producten ophalen via blade -->)</p>
            <p>verzendkosten (<!-- Verzendkosten berekenen via blade indien nodig -->)</p>
            <p>Totaal (<!-- Het totaal berekenen via blade -->)</p>
        </div>
    </div>

    <input class="btn btn-primary pull-right pay-button" type="submit">



    @stop