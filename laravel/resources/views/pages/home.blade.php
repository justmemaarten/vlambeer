@extends('base')

@section('content')
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="row row-game-item">

                <div class="game-item col-md-4 panel-heading">
                    <div class="content panel-title">
                        <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#gunGodz">
                            <img src="http://www.lorempixel.com/200/200" alt="">
                        </a>
                    </div>
                </div>
                <div class="game-item col-md-4 panel-heading">
                    <div class="content panel-title">
                        <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#lufTrausers">
                            <img src="http://www.lorempixel.com/200/200" alt="">
                        </a>
                    </div>
                </div>
                <div class="game-item col-md-4 panel-heading">
                    <div class="content panel-title">
                        <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#nuclear-Throne">
                            <img src="http://www.lorempixel.com/200/200" alt="">
                        </a>
                    </div>
                </div>
            </div>

            {{--these are the texts which are being dropped down when you click on a link--}}
            <div class="panel-collapse collapse" id="gunGodz">
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at blanditiis consequuntur cupiditate delectus et eum exercitationem
                        explicabo fuga inventore iure magnam, minus mollitia pariatur, perferendis perspiciatis rem repellat tempora.</p>
                </div>
            </div>
            <div class="collapse collapse" id="lufTrausers">
                <div class="panel-body">
                    <p>test test</p>
                </div>
            </div>
            <div class="collapse collapse" id="nuclear-Throne">
                <div class="panel-body">
                    <p>test test</p>
                </div>
            </div>
            <div class="row row-game-item">
                <div class="game-item col-md-4 panel-heading">
                    <div class="content panel-title">
                        <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#ridiculous-Fishing">
                            <img src="http://www.lorempixel.com/200/200" alt="">
                        </a>
                    </div>
                </div>
                <div class="game-item col-md-4 panel-heading">
                    <div class="content panel-title">
                        <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#serious-Sam">
                            <img src="http://www.lorempixel.com/200/200" alt="">
                        </a>
                    </div>
                </div>
                <div class="game-item col-md-4 panel-heading">
                    <div class="content panel-title">
                        <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#super-Crate-Box">
                            <img src="http://www.lorempixel.com/200/200" alt="">
                        </a>
                    </div>
                </div>
            </div>

            {{--these are the texts which are being dropped down when you click on a link--}}
            <div class="panel-collapse collapse" id="ridiculous-Fishing">
                <div class="panel-body">
                    <p>test test</p>
                </div>
            </div>
            <div class="panel-collapse collapse" id="serious-Sam">
                <div class="panel-body">
                    <p>test test</p>
                </div>
            </div>
            <div class="panel-collapse collapse" id="super-Crate-Box">
                <div class="panel-body">
                    <p>test test</p>
                </div>
            </div>
        </div>

    </div>

    <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Link with href
    </a>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Button with data-target
    </button>



@stop
