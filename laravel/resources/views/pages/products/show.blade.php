@extends('base')

@section('content')

<form action="{{ action('ProductController@update') }}" method="POST" >
    {{ csrf_field() }}


</form>


@stop