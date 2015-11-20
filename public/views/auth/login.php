<?php
/**
 * Created by PhpStorm.
 * User: Jeroen_Stamkot
 * Date: 20-11-15
 * Time: 11:19
 */
?>

<div class="col-md-10 col-md-push-1">
    <h1 class="text-center">Please Log In</h1>

    <form action="<?='*link controller*' ?>" method="POST">
        <input type="hidden" value="login" name="type">

        <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" type="text" name="username" placeholder="Username">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" placeholder="Password">
        </div>

        <input type="submit" value="login" class="btn btn-primary"/>
    </form>
</div>