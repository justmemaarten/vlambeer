@extends('base')

@section('content')
    <h1>Orders</h1>
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
            <tr>
                <td class="order-information">{{$order->id}}</td>
                <td class="order-information">test</td>
                <td class="order-information">{{$order->created_at}}</td>
                <td class="order-information">{{ $totalprice }}</td>
                <td class="order-information">{{ $order->status }}</td>
                <td class="order-information"><a href="">cancel</a></td>
            </tr>
        </tbody>
    </table>

@stop