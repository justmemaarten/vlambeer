@extends('base')

@section('content')

<form action="{{ action('ProductsController@update') }}" method="POST" >
    {{ csrf_field() }}

</form>


@stop