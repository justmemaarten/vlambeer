@extends('base')

@section('content')
    <div class="col-md-4 col-md-push-4">
        <h1>Address:</h1>
        <form action="" method="POST" >
            {{ csrf_field() }}
            <div class="form-group">
                <label for="street"> Street </label>
                <input type="text" name="street" class="form-control" value="{{ $user['street'] }}" readonly>
            </div>
            <div class="form-group">
                <label for="house_nr"> House number </label>
                <input type="text" name="house_nr" class="form-control" value="{{ $user['house_nr'] }}" readonly>
            </div>
            <div class="form-group">
                <label for="postalcode"> Postal Code </label>
                <input type="text" name="postalcode" class="form-control" value="{{ $user['postalcode'] }}" readonly>
            </div>
            <div class="form-group">
                <label for="city"> City </label>
                <input type="text" name="city" class="form-control" value="{{ $user['city'] }}" readonly>
            </div>
        </form>

        <form>
            <input type="radio" name="address" value="this" checked>This address
            <br>
            <input id="other" type="radio" name="address" value="other">Other
        </form>
            <a id="nextB" class="btn btn-primary pull-right" href="{{ action("PagesController@pay") }}">Next</a>
        <div class="other" hidden>
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
    </div>

@stop