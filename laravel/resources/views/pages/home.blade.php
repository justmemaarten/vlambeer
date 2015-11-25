@extends('base')

@section('content')
    <div class="row row-game-item">
        <div class="game-item col-md-4"><div class="content"><a class="btn btn-primary" role="button" data-toggle="collapse" href="#gunGodz" aria-expanded="false" aria-controls="collapseExample"><img src="http://www.lorempixel.com/200/200" alt=""></a></div></div>
        <div class="game-item col-md-4"><div class="content"><a class="btn btn-primary" role="button" data-toggle="collapse" href="#lufTrausers" aria-expanded="false" aria-controls="collapseExample"><img src="http://www.lorempixel.com/200/200" alt=""></a></div></div>
        <div class="game-item col-md-4"><div class="content"><a class="btn btn-primary" role="button" data-toggle="collapse" href="#nuclear-Throne" aria-expanded="false" aria-controls="collapseExample"><img src="http://www.lorempixel.com/200/200" alt=""></a></div></div>
    </div>

    {{--these are the texts wich are being dropped down when you click on a link--}}
    <div class="collapse" id="gunGodz">
        <div class="well gunGodz">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at blanditiis consequuntur cupiditate delectus et eum exercitationem
                explicabo fuga inventore iure magnam, minus mollitia pariatur, perferendis perspiciatis rem repellat tempora.</p>
        </div>
    </div>
    <div class="collapse" id="lufTrausers">
        <div class="well lufTrausers">
            <p>test test</p>
        </div>
    </div>
    <div class="collapse" id="nuclear-Throne">
        <div class="well nuclear-Throne">
            <p>test test</p>
        </div>
    </div>
    <div class="row row-game-item">
        <div class="game-item col-md-4"><div class="content"><a class="btn btn-primary" role="button" data-toggle="collapse" href="#ridiculous-Fishing" aria-expanded="false" aria-controls="collapseExample"><img src="http://www.lorempixel.com/200/200" alt=""></a></div></div>
        <div class="game-item col-md-4"><div class="content"><a class="btn btn-primary" role="button" data-toggle="collapse" href="#serious-Sam" aria-expanded="false" aria-controls="collapseExample"><img src="http://www.lorempixel.com/200/200" alt=""></a></div></div>
        <div class="game-item col-md-4"><div class="content"><a class="btn btn-primary" role="button" data-toggle="collapse" href="#super-Crate-Box" aria-expanded="false" aria-controls="collapseExample"><img src="http://www.lorempixel.com/200/200" alt=""></a></div></div>
    </div>

    {{--these are the texts wich are being dropped down when you click on a link--}}
    <div class="collapse" id="ridiculous-Fishing">
        <div class="well ridiculous-Fishing">
            <p>test test</p>
        </div>
    </div>
    <div class="collapse" id="serious-Sam">
        <div class="well serious-Sam">
            <p>test test</p>
        </div>
    </div>
    <div class="collapse" id="super-Crate-Box">
        <div class="well super-Crate-Box">
            <p>test test</p>
        </div>
    </div>

    <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Link with href
    </a>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Button with data-target
    </button>



@stop
