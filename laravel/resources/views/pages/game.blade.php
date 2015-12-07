@extends('base')

@section('content')
    <div class="row game-{{ $id = $_GET['id'] }}">
        <div class="col-md-3 pull-left game-img-2">
            <img class="game-icon" id="{{ $id }}Icon" alt="pixel">
        </div>
        <div class="col-md-9 game-info">
            <h1 id="{{ $id }}Title"></h1>
            <h4 id="{{ $id }}Deck"></h4>
            <h4 id="{{ $id }}platforms"></h4>

        </div>
        <div class="stores">
            <a href="http://vlambeer.com/downloads/special/GUNGODZ.rar" target="_blank">
                <img src="{{ asset('media/img/downloadIcon.png') }}" alt="download" height="40px" width="40px">
            </a>
        </div>
    </div>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <a href="http://lorempixel.com/1180/400/" data-lightbox="slider"><img src="http://lorempixel.com/1180/400/" alt="slider-photo-0"></a>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <a href="http://lorempixel.com/1180/400/" data-lightbox="slider"><img src="http://lorempixel.com/1180/400/" alt="slider-photo-1"></a>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <a href="http://lorempixel.com/1180/400/" data-lightbox="slider"><img src="http://lorempixel.com/1180/400/" alt="slider-photo-2"></a>
                <div class="carousel">
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row animatedParent">
        <div id="game-info" class="panels">
            <div class="col-md-6 animated fadeInLeftShort">
                <div id="info-text">
                    <p id="{{ $id }}description">
                    </p>
                </div>
                <div id="info-read-more" style="display: none;height: 0;">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicingelit. Voluptatibus accusantium
                        exercitationem nostrum, deserunt ipsum, odit repellat molestiae doloribus enim libero beatae sint
                        quae fuga quidem vel, saepe ab porro similique! Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Accusantium adipisci assumenda dolorem, eius explicabo modi molestias mollitia natus nesciunt
                        possimus quae quis, quos ullam. At illum laborum odio velit voluptatum.asperiores laboriosam dolorem
                        que labore, totam nobis quod maxime eius rem nulla provident ullam quia, odio repellendus libero.
                    </p>
                </div>
                <div class="more-less">
                    <span class="read-less hidden">Sluiten</span>
                    <span class="read-more">Lees meer</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 animated fadeInRightShort">
            <div id="maker-info" class="panels">
                <h1>TEST</h1>
                <div id="info-text">
                    <p id="{{ $id }}genres"></p>
                </div>
                <div id="info-read-more2" style="display: none;height: 0;">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicingelit. Voluptatibus accusantium
                        exercitationem nostrum, deserunt ipsum, odit repellat molestiae doloribus enim libero beatae sint
                        quae fuga quidem vel, saepe ab porro similique! Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Accusantium adipisci assumenda dolorem, eius explicabo modi molestias mollitia natus nesciunt
                        possimus quae quis, quos ullam. At illum laborum odio velit voluptatum.asperiores laboriosam dolorem
                        que labore, totam nobis quod maxime eius rem nulla provident ullam quia, odio repellendus libero.
                    </p>
                </div>
                <div class="more-less2">
                    <span class="read-less2 hidden">Sluiten</span>
                    <span class="read-more2">Lees meer</span>
                </div>
            </div>
        </div>
    </div>
@stop