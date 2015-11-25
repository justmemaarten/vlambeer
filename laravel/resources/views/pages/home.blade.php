@extends('base')

@section('content')

    <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Link with href
    </a>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Button with data-target
    </button>
    <div class="collapse" id="collapseExample">
        <div class="well">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at blanditiis consequuntur cupiditate delectus et eum exercitationem
            explicabo fuga inventore iure magnam, minus mollitia pariatur, perferendis perspiciatis rem repellat tempora.</p>
        </div>
    </div>


@stop
