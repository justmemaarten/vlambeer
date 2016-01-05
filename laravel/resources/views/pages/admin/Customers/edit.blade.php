@extends('adminBase')

@section('admin')
    <content>
        <form class="col-md-4 col-md-push-4" action="....." method="POST">
            <h1 class="text-center">Add Contact</h1>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" required/>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control" required/>
            </div>

            <div class="form-group">
                <label for="firstName">First name</label>
                <input type="text" name="firstName" class="form-control" required/>
            </div>

            <div class="form-group">
                <label for="insertion">Insertion</label>
                <input type="text" name="insertion" class="form-control" required/>
            </div>

            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="phone">Phone number</label>
                <input type="text" name="phonenumber" class="form-control" required/>
            </div>

            <div class="form-group">
                <label for="birthdate">Birthdate</label>
                <input type="date" name="birthdate" class="form-control" required/>
            </div>

            <div class="form-group">
                <label for="street">Street</label>
                <input type="text" name="street" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="house_nr">House Number</label>
                <input type="text" name="house_nr" class="form-control">
            </div>

            <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="postal_code">Postal Code</label>
                <input type="text" name="postal_code" class="form-control">
            </div>

            <div class="form-group">
                <label for="street2">Street 2</label>
                <input type="text" name="faxNumber" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="house_nr2">House Number 2</label>
                <input type="text" name="house_nr2" class="form-control">
            </div>

            <div class="form-group">
                <label for="city2">City 2</label>
                <input type="text" name="city2" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="postal_code2">Postal Code 2</label>
                <input type="text" name="postal_code2" class="form-control">
            </div>


            <input type="submit" value="Create user" class="btn btn-success"/>
        </form>
    </content>

@stop