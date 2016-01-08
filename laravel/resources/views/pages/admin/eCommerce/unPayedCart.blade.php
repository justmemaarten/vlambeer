@extends('adminBase')


@section('admin')

    <div class="main-content">
        <h1>Unpayed Carts</h1>
        <table class="top-information table table-striped table-hover sortable">
            <thead >
            <tr>
                <td>ID</td>
                <td>Catergory</td>
                <td>Date created</td>
                <td>Price</td>
                <td>Paid</td>
                <td>Edit/Delete</td>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td class="order-information">{{$user->id}}</td>
                    <td class="order-information">test</td>
                    <td class="order-information">{{$user->created_at}}</td>
                    <td class="order-information">test</td>
                    @if ($user->paid == NULL)
                        <td class="order-information danger">{{$user->paid}}</td>
                    @else
                        <td class="order-information succes">{{$user->paid}}</td>
                    @endif

                    <td class="order-information"><!--{Auth::user()->status--> test</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@stop