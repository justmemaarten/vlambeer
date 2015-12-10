<form class="auth-form" action="auth/login" method="post">
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="">Email</label>
        <input class="form-control" type="text" name="email" id="email">
    </div>

    <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>

    <input type="submit" value="Login" class="auth-btn">
</form>