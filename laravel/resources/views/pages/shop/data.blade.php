@extends('base')

@section('content')
    <div class="col-md-4 col-md-push-4">
        <div class="addressData">
            <h1>Address:</h1>
            <br>
            <form>

                <input type="radio" name="address" value="this" checked>I want to use a existing address
                <select class="this">
                    <option value="1">{{ $user['firstname'] }} {{ $user['lastname'] }}, {{ $user['street'] }} {{ $user['house_nr'] }}, {{ $user['postalcode'] }}, {{ $user['city'] }}</option>
                    <option value="2">{{ $user['firstname'] }} {{ $user['lastname'] }}, {{ $user['street2'] }} {{ $user['house_nr2'] }}, {{ $user['postalcode2'] }}, {{ $user['city2'] }}</option>
                </select>
                <br>
                <input id="other" type="radio" name="address" value="other">Other
            </form>


            <div class="other" hidden>
                <form action="{{ action("UserController@update") }}" method="POST" >
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="id" value="{{ $user['id'] }}">
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
    </div>
@stop