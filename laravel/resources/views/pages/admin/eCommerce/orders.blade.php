@extends('adminBase')

@section('admin')

<div class="main-content">
    <table class="top-information table table-striped table-hover">
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
    @foreach($users as $user)
            <tr>
                <td class="order-information">{{$user->id}}</td>
                <td class="order-information">test</td>
                <td class="order-information">{{$user->created_at}}</td>
                <td class="order-information">test</td>
                <td class="order-information">test</td>
                <td class="order-information"><!--{Auth::user()->status--> test</td>
            </tr>
    @endforeach
        </tbody>
    </table>
</div>
<h1>test</h1>


@stop