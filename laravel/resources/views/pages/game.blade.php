@extends('base')

@section('content')
    <div class="row game-{{ $id = $_GET['id'] }}">
        <div class="game-content">
            <div class="col-md-3 pull-left game-img-2">
                <img class="game-icon" id="{{ $id }}Icon" alt="pixel">
            </div>
            <div class="col-md-9 game-info">
                <h1 id="{{ $id }}Title"></h1>
                <h4 id="{{ $id }}Deck"></h4>
                <h4 id="{{ $id }}platforms"><!--check op beschikbare platforms en dan dan de beschikbare
                    links naar de stores weergeven met de icons--></h4>
                <h4 id="{{ $id }}rating">Rating</h4>
            </div>
            <div class="{{ $id }}stores stores">
                <span class="download">Download:</span>
            </div>
        </div>
    </div>
    <div id="carousel-example-generic" class="carousel slide animated fadeInUp " data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <a href="http://lorempixel.com/1180/400/" data-lightbox="slider"><img src="{{ asset('media/img/slider/slider-1-' . $id . '.png') }}" alt="slider-photo-0"></a>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <a href="http://lorempixel.com/1180/400/" data-lightbox="slider"><img src="{{ asset('media/img/slider/slider-2-' . $id . '.png') }}" alt="slider-photo-1"></a>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <a href="http://lorempixel.com/1180/400/" data-lightbox="slider"><img src="{{ asset('media/img/slider/slider-3-' . $id . '.png') }}" alt="slider-photo-2"></a>
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
                    <p id="{{ $id }}description"></p>
                    <p style="color: transparent"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at corporis cupiditate dolorem ea earum, eligendi eveniet fuga illo laudantium, molestias nemo optio placeat quos reprehenderit repudiandae sit sunt voluptates.</span><span>Accusantium aperiam at aut ex maxime necessitatibus non quam quisquam quo tempore! Ab accusantium at aut corporis distinctio doloremque doloribus iure laboriosam laborum nisi numquam omnis praesentium quia reprehenderit, totam!</span><span>Assumenda iste obcaecati odit. Ab amet animi aspernatur assumenda dolorem doloremque ducimus eaque eligendi, error eum facere fuga fugiat hic in molestiae nam nobis repudiandae sint unde velit? Ipsum, voluptates!</span><span>Accusamus atque cum dicta dignissimos dolor dolore eaque eligendi enim expedita explicabo facere fugiat illo incidunt minus neque nulla numquam quaerat repudiandae sed sequi veritatis voluptas, voluptate voluptatem voluptates voluptatibus!</span><span>A adipisci assumenda corporis illum, laboriosam neque reiciendis repudiandae similique unde voluptas! Adipisci autem dicta error inventore quis saepe sint? Aliquid aperiam delectus dolores iusto omnis sint tenetur ut voluptatem?</span></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 animated fadeInRightShort">
            <div id="maker-info" class="panels">
                <div class="game-details">
                    <h3>Game details</h3>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <td class="bar" id="{{ $id }}name"></td>
                            </tr>
                            <tr>
                                <th>First release date</th>
                                <td class="bar" id="{{ $id }}original_release_date"></td>
                            </tr>
                            <tr>
                                <th>Platform</th>
                                <td class="bar" id="{{ $id }}platform"></td>
                            </tr>
                            <tr>
                                <th>Developer</th>
                                <td class="bar" id="{{ $id }}developer"></td>
                            </tr>
                            <tr>
                                <th>Publisher</th>
                                <td class="bar" id="{{ $id }}publishers"></td>
                            </tr>
                            <tr>
                                <th>Genre</th>
                                <td class="bar" id="{{ $id }}genres"></td>
                            </tr>
                            <tr>
                                <th>Theme</th>
                                <td class="bar" id="{{ $id }}themes"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop