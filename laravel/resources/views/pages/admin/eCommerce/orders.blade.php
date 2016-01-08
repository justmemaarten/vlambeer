@extends('adminBase')

@section('admin')

<div class="main-content">
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
    @foreach($orders as $order)
            <tr>
                <td class="order-information">{{$order->id}}</td>
                <td class="order-information">test</td>
                <td class="order-information">{{$order->created_at}}</td>
                <td class="order-information">test</td>
                <td class="order-information">test</td>
                <td class="order-information"><!--{Auth::user()->status--> test</td>
            </tr>
    @endforeach
        </tbody>
    </table>
</div>


@stop