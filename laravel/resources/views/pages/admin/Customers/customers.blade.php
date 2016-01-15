@extends('adminBase')

@section('admin')

    <div class="main-content">
        <h1>Customers</h1>
        <table class="top-information table table-striped table-hover sortable">
            <thead style="font-weight: bold">
            <tr>
                <td>ID</td>
                <td>Username</td>
                <td>Firstname</td>
                <td>Insertion</td>
                <td>Lastname</td>
                <td>Admin</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{$customer->id}}</td>
                    <td><a href="{{ action("CustomersController@show", $customer->id) }}">{{$customer->username}}</a></td>
                    <td>{{$customer->firstname}}</td>
                    <td>{{$customer->insertion}}</td>
                    <td>{{$customer->lastname}}</td>
                    <td>@if($customer->isadmin == 0) No @else Yes @endif</td>
                    <td><a class="btn btn-warning" href="{{ action("CustomersController@edit", $customer->id) }}">Edit</a></td>
                    <td><form action="{{action("CustomersController@destroy", $customer->product_id)}}" method="POST">
                            {{ csrf_field() }}

                            <input type="hidden" name="_method" value="delete">
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@stop