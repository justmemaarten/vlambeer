@extends('adminBase')

@section('admin')

    <div class="main-content">
        <table class="top-information table table-striped table-hover sortable">
            <thead >
            <tr>
                <td>ID</td>
                <td>Catergory</td>
                <td>Date created</td>
                <td>Price</td>
                <td>Status</td>
                <td>Edit/Delete</td>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td class="order-information">{{$customer->id}}</td>
                    <td class="order-information">{{$customer->username}}</td>
                    <td class="order-information">{{$customer->firstname}}</td>
                    <td class="order-information">{{$customer->insertion}}</td>
                    <td class="order-information">{{$customer->lastname}}</td>
                    <td class="order-information"><!--{Auth::user()->status--> test</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@stop