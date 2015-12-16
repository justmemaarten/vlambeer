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
            <form action="{{ action("PagesController@pay") }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="u" value="13ed99cfb38ac0b07e3913c01">
                <input type="hidden" name="id" value="5862ff0f83">


                <div id="mergeTable" class="mergeTable">


                    <div class="mergeRow dojoDndItem mergeRow-email" id="mergeRow-0">
                        <div class="field-group">
                            <input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" value="{{ $user['email'] }}" hidden>
                            <input type="checkbox" name="email" value="true">Subscribe to newsletter<br>
                        </div>
                    </div>
                </div>
                <!-- real people should not fill this in and expect good things -->
                <div hidden class="hidden-from-view" aria-hidden="true"><input type="text" name="b_13ed99cfb38ac0b07e3913c01_5862ff0f83" tabindex="-1" value=""></div>

                <div class="submit_container clear">
                    <input type="submit" class="button btn btn-primary pull-right" name="submit" value="next">
                </div>
            </form>
        </div>
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

    <script type="text/javascript">
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
        try {
            var _gaq = _gaq || [];
            _gaq.push(["_setAccount", "UA-329148-88"]);
            _gaq.push(["_setDomainName", ".list-manage.com"]);
            _gaq.push(["_trackPageview"]);
            _gaq.push(["_setAllowLinker", true]);
        } catch(err) {console.log(err);}</script>
@stop