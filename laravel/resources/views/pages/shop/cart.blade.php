@extends('base')

@section('content')



    <h1>Shopping Cart</h1>
    <div class="row row-shopping-cart">
        <div class="product col-md-3">
            <img class="cart-img" src="http://www.lorempixel.com/329/230" alt="">
            <p class="product-amount"><!-- opalen amount variabelen uit database (tbl_cart) --> 18 x</p>
            <!-- min en max van het aantal producten meegeven (min = 0, max = aantal producten
            in de winkelwagen van dat specefieke product) -->
            <input class="form-group input-delete-number" type="number">
            <input class="btn btn-primary delete-cart-item-button" type="submit" value="Delete">
            <div class="product-info">
                <h4>Product info</h4>
                <p class="product-price">
                </p>
            </div>
        </div>
        <div class="product col-md-3">
            <img class="cart-img" src="http://www.lorempixel.com/329/230" alt="">
            <p class="product-amount"><!-- opalen amount variabelen uit database (tbl_cart) --> 18 x</p>
            <!-- min en max van het aantal producten meegeven (min = 0, max = aantal producten
            in de winkelwagen van dat specefieke product) -->
            <input class="form-group input-delete-number" type="number">
            <input class="btn btn-primary delete-cart-item-button" type="submit" value="Delete">
            <div class="product-info">
                <h4>Product info</h4>
                <p class="product-price"> {{$products->price}} </p>
            </div>
        </div>
        <div class="product col-md-3">
            <img class="cart-img" src="http://www.lorempixel.com/329/230" alt="">
            <p class="product-amount"><!-- opalen amount variabelen uit database (tbl_cart) --> 18 x</p>
            <!-- min en max van het aantal producten meegeven (min = 0, max = aantal producten
            in de winkelwagen van dat specefieke product) -->
            <input class="form-group input-delete-number" type="number">
            <input class="btn btn-primary delete-cart-item-button" type="submit" value="Delete">
            <div class="product-info">
                <h4>Product info</h4>
                <p class="product-price"> $ 200 </p>
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