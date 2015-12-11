@extends('base')

@section('content')
    <h1>{{ $product['name']  }}</h1>
    <h2>Stock: {{ $product['stock'] }}</h2>


@stop