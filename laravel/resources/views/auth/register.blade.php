<form class="auth-form" action="{{action('Auth\AuthController@postRegister')}}" method="post">
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="">Username</label>
        <input class="form-control" type="text" name="username" id="password">
    </div>

    <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Confirm Password</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Firstname</label>
        <input class="form-control" type="text" name="firstname" id="firstname">
    </div>

    <div class="form-group">
        <label for="">Insertion</label>
        <input class="form-control" type="text" name="insertion" id="insertion">
    </div>

    <div class="form-group">
        <label for="">Lastname</label>
        <input type="text" name="lastname" id="lastname" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Phone number</label>
        <input type="text" name="phone_nr" id="phone_nr" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Birthdate (YYYY-MM-DD)</label>
        <input class="form-control" type="text" name="birthdate" id="birthdate">
    </div>

    <div class="form-group">
        <label for="">City</label>
        <input type="text" name="city" id="city" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Street</label>
        <input type="text" name="street" id="street" class="form-control">
    </div>

    <div class="form-group">
        <label for="">House number</label>
        <input class="form-control" type="text" name="house_nr" id="house_nr">
    </div>

    <div class="form-group">
        <label for="">Postal code</label>
        <input type="text" name="postalcode" id="postalcode" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" id="email" class="form-control">
    </div>
    <input type="submit" value="register" class="auth-btn">
</form>