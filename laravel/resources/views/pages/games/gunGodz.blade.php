@extends('base')

@section('content')
    <div class="row">
        <div class="col-md-3 pull-left game-img-2">
            <img src="http://lorempixel.com/250/250/" alt="pixel">
        </div>
        <div class="col-md-9 game-info">
            <h1>Gun Godz</h1>
            <h4>Electronic arts &nbsp;</h4>
            <h4>Sportgames &nbsp;</h4>
            <h4>Actie en avontuur &nbsp;</h4>
            <h4>XXXXXX &nbsp;</h4>
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
                <a href="http://lorempixel.com/1180/400/" data-lightbox="slider"><img src="http://lorempixel.com/1180/400/" alt="slider-photo-0"></a>.
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

    <div class="row">
        
    </div>
@stop