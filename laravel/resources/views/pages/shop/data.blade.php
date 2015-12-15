@extends('base')

@section('content')

    <div class="other" hidden style="float: right;">
        <form action="" method="POST" >
            {{ csrf_field() }}
            <div class="form-group">
                <label for="street"> Street </label>
                <input type="text" name="street" class="form-control">
            </div>
            <div class="form-group">
                <label for="house_nr"> House number </label>
                <input type="text" name="house_nr" class="form-control">
            </div>
            <div class="form-group">
                <label for="postalcode"> Postal Code </label>
                <input type="text" name="postalcode" class="form-control">
            </div>
            <div class="form-group">
                <label for="city"> City </label>
                <input type="text" name="city" class="form-control">
            </div>
            <input type="submit" value="Next" class="btn btn-primary pull-right">
        </form>
    </div>
<h1>Address:</h1>
    <h3>{{ $user['street'] }} {{ $user['house_nr'] }}</h3>
    <h3>{{ $user['postalcode'] }}</h3>
    <h3>{{ $user['city'] }}</h3>

<form>
    <input type="radio" name="address" value="this" checked>This address
    <br>
    <input id="other" type="radio" name="address" value="other">Other
</form>
    <a id="nextB" class="btn btn-primary pull-right" href="{{ action("PagesController@pay") }}">Next</a>

@stop