@extends('adminBase')

@section('admin')
    <content>
        <form class="col-md-4 col-md-push-4" action="{{ action('CustomersController@update', $customer->id) }}" method="POST">
            {{ csrf_field() }}
            <h1 class="text-center">Edit Contact</h1>

            @if ($errors->has())
                <ul class="list-group">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item list-group-item-warning">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <input type="hidden" name="_method" value="put"/>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" value="{{$customer->username}}" required/>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" required/>
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control" value="{{$customer->email}}" required/>
            </div>

            <div class="form-group">
                <label for="firstName">First name</label>
                <input type="text" name="firstname" class="form-control" value="{{$customer->firstname}}" required/>
            </div>

            <div class="form-group">
                <label for="insertion">Insertion</label>
                <input type="text" name="insertion" class="form-control" value="{{$customer->insertion}}" />
            </div>

            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" class="form-control" value="{{$customer->lastname}}" required/>
            </div>

            <div class="form-group">
                <label for="phone">Phone number</label>
                <input type="text" name="phonenumber" class="form-control" value="{{$customer->phone_nr}}" required/>
            </div>

            <div class="form-group">
                <label for="birthdate">Birthdate</label>
<<<<<<< HEAD
                <input type="date" name="birthdate" class="form-control" value="{{$customer->birthdate}}" required/>
            </div>

            <div class="form-group">
                <label for="isadmin">Admin</label>
                <select name="isadmin" class="form-control">
                    @if ($customer->isadmin == 0)
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    @else
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    @endif
                </select>
            </div>

            <div class="form-group">
                <label for="hasnewsletter">Newsletter</label>
                <select name="hasnewsletter" class="form-control">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
=======
                <input type="datetime" name="birthdate" class="form-control" value="{{$customer->birthdate}}" required/>
>>>>>>> origin/master
            </div>

            <h4 class="text-center">First Address information</h4>

            <div class="form-group">
                <label for="street">Street</label>
                <input type="text" name="street" class="form-control" value="{{$customer->street}}"/>
            </div>

            <div class="form-group">
                <label for="house_nr">House Number</label>
                <input type="text" name="house_nr" class="form-control" value="{{$customer->house_nr}}"/>
            </div>

            <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" class="form-control" value="{{$customer->city}}"/>
            </div>

            <div class="form-group">
                <label for="postal_code">Postal Code</label>
                <input type="text" name="postalcode" class="form-control" value="{{$customer->postalcode}}"/>
            </div>

            <h4 class="text-center">Second Address information</h4>

            <div class="form-group">
                <label for="street2">Street 2</label>
                <input type="text" name="faxNumber" class="form-control" value="{{$customer->street2}}"/>
            </div>

            <div class="form-group">
                <label for="house_nr2">House Number 2</label>
                <input type="text" name="house_nr2" class="form-control" value="{{$customer->house_nr2}}"/>
            </div>

            <div class="form-group">
                <label for="city2">City 2</label>
                <input type="text" name="city2" class="form-control" value="{{$customer->city2}}"/>
            </div>

            <div class="form-group">
                <label for="postal_code2">Postal Code 2</label>
                <input type="text" name="postalcode2" class="form-control" value="{{$customer->postal_code2}}"/>
            </div>

<<<<<<< HEAD
            <h4 class="text-center">Password reset</h4>

            <div class="form-group">
                <label for="passwordreset">Set password to lastname</label>
                <select name="passwordreset" class="form-control">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

=======
>>>>>>> origin/master

            <input type="submit" value="Update user" class="btn btn-success"/>
        </form>
    </content>

@stop