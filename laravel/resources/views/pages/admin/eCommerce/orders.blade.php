@extends('adminBase')

@section('admin')

        <?php
            $customers = Auth::user();
        ?>
<div class="main-content">
    <table class="top-information">
        <tr>
            <td>ID</td>
            <td>Catergory</td>
            <td>Date created</td>
            <td>Price</td>
            <td>Status</td>
            <td>Edit/Delete</td>
        </tr>
    </table>
    @foreach($customers as $customer)
        <table class="order-overview">
            <tr>
                <td class="order-information">{{Auth::user()->id}}</td>
                <td class="order-information">test</td>
                <td class="order-information">{{Auth::user()->created_at}}</td>
                <td class="order-information">test</td>
                <td class="order-information">test</td>
                <td class="order-information">{{Auth::user()->status}}</td>
            </tr>
        </table>
    @endforeach
</div>
<h1>test</h1>


@stop