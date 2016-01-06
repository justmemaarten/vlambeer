@extends('adminBase')

@section('admin')

    <div class="main-content">
        <table class="top-information table table-striped table-hover sortable">
            <thead >
            <tr>
                <td>ID</td>
                <td>Username</td>
                <td>Firstname</td>
                <td>Insertion</td>
                <td>Lastname</td>
                <td>Edit</td>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td class="order-information">{{$customer->id}}</td>
                    <td class="order-information"><a href="">{{$customer->username}}</a></td>
                    <td class="order-information">{{$customer->firstname}}</td>
                    <td class="order-information">{{$customer->insertion}}</td>
                    <td class="order-information">{{$customer->lastname}}</td>
                    <td class="order-information"><a href="{{ action("CustomersController@edit", $customer->id) }}">Edit</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@stop