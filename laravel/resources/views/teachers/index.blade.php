@extends('base')

@section('content')
    <div class="container">

        <h1>Teachers</h1>
        <ul class="list-group">
            @foreach($teachers as $teacher)
                <li class="list-group-item">{{$teacher->doc_naam}}</li>
            @endforeach
        </ul>
    </div>
@stop