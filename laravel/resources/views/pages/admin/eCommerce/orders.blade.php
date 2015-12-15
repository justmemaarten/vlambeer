@extends('dashboard')

@section('content')

<<<<<<< HEAD
<div class="main-content">
    <ul>
        <li><img src="" alt=""></li>
        <li>ID</li>
        <li>Catergory</li>
        <li>Date created</li>
        <li>Price</li>
        <li>Status</li>
        <li>edit/delete</li>
    </ul>
    @foreach ($customer as $customers)
        <ul>
            <li>{{Auth::user()->id}}</li>
            <li></li>
            <li>{{Auth::user()->created_at}}</li>
            <li></li>
            <li></li>
            <li>{{Auth::user()->status}}</li>
            <li>
                <input type="submit" value="edit">
                <input type="submit" value="delete">
            </li>
        </ul>
    @endforeach
</div>
=======
<h1>test</h1>
>>>>>>> origin/master


@stop