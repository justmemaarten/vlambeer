<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vlambeer</title>
    <link rel="stylesheet" href="http://bootswatch.com/yeti/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/animations.css')}}">
    <link rel="stylesheet" href="{{asset('css/twitter-styles.css')}}">


</head>
<?php
if(!isset($_GET['id'])){
    $id = 0;
}?>
<body class="game-<?=$id?>">
    <header data-spy="affix">
        <div class="container">
            <div id="sub"></div>
            <nav>
                <div class="dropdown">
                    <a href="{{ action("PagesController@home") }}" class="btn btn-primary" role="button">Home</a>
                    <button class="btn btn-primary" id="dropGames" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Games
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropGames">
                        <li>
                            <a href="{{ action("PagesController@product",'id=3030-39474') }}">Luftrausers</a>
                        </li>
                        <li>
                            <a href="{{ action("PagesController@product",'id=3030-41999') }}">Nuclear Throne</a>
                        </li>
                        <li>
                            <a href="{{ action("PagesController@product",'id=3030-40158') }}">Rediculous Fishing - A tale of Redemption</a>
                        </li>
                        <li>
                            <a href="{{ action("PagesController@product",'id=3030-37491') }}">Gun Godz</a>
                        </li>
                        <li>
                            <a href="{{ action("PagesController@product",'id=3030-34402') }}">Serious Sam: The Random Encounter</a>
                        </li>
                        <li>
                            <a href="{{ action("PagesController@product",'id=3030-32945') }}">Super Crate Box</a>
                        </li>
                        <li>
                            <a href="{{ action("PagesController@product",'id=3030-46090') }}">Super Bread Box</a>
                        </li>
                    </ul>
                    <a href="" class="btn btn-primary" role="button">Contact</a>
                    <a href="" class="btn btn-primary" role="button">About</a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login-register">
                        Login / Register
                    </button>
                </div>
            </nav>
        </div>


    </header>

    <!-- Modal -->
    <div class="modal fade" id="login-register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Log in</a></li>
                        <li role="presentation"><a href="#register" aria-controls="register" role="tab" data-toggle="tab">Register</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="login">
                            @yield('pages/login')
                        </div>
                        <div role="tabpanel" class="tab-pane" id="register">

                        </div>
                    </div>

                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div id="quote"></div>

        @yield('content')


    </div>
    <footer>
        <div class="container">
            <div class="col-md-4">
                <div id="info">
                    <div class="about-us">
                        <strong>VLAMBEER IS A DUTCH INDEPENDENT GAME STUDIO</strong> made up of Rami Ismail and Jan Willem Nijman, bringing back arcade games since 1978.
                    </div>

                    <div class="team-rami">
                        <img src="{{asset('media/images/team_rami.png')}}">
                        <strong>Rami Ismail</strong><br>
                        <i>Business and Development</i><br>
                        rami@vlambeer.com<br>
                        <a href="http://twitter.com/tha_rami">@tha_rami</a><br>
                    </div>

                    <div class="team-jw">
                        <img src="{{asset('media/images/team_jw.png')}}">
                        <strong>Jan Willem Nijman</strong><br>
                        <i>Game Design</i><br>
                        jw@vlambeer.com<br>
                        <a href="http://twitter.com/jwaaaap">@jwaaaap</a><br>
                    </div>

                    <div class="contact">info@vlambeer.com | Neude 5, 3512 AD, Utrecht, the Netherlands | +31621206363</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="friends">
                    <strong>FRIENDS OF VLAMBEER</strong>
                    <ul>
                        <a href="http://www.pietepiet.net/"><li>Paul Veer</li></a>
                        <a href="http://www2.hku.nl/~roy/"><li>Roy Nathan de Groot</li></a>
                        <a href="http://kozilek.bandcamp.com/"><li>KOZILEK</li></a>
                        <a href="http://www.stfj.net/"><li>Zach Gage</li></a>
                        <a href="http://www.aeiowu.com/"><li>Greg Wohlwend</li></a>
                        <a href="http://www.kertgartner.com/"><li>Kert Gartner</li></a>
                        <a href="http://www.strotch.net/"><li>Phlogiston</li></a>
                        <a href="http://www.devolverdigital.com/"><li>Devolver Digital</li></a>
                        <a href="http://www.sparpweed.nl/"><li>Sparpweed</li></a>
                        <a href="http://www.alexmauer.com/"><li>Alex Mauer</li></a>
                        <a href="http://brotherandroid.110mb.com/"><li>Brother Android</li></a>
                        <a href="http://www.thepoppenkast.com/"><li>The Poppenkast</li></a>
                        <a href="http://www.venuspatrol.com/"><li>Venus Patrol</li></a>
                        <a href="http://www.control-online.nl/"><li>Control Magazine</li></a>
                        <a href="http://www.facebook.com/Vlambeer"><li style="color:#fff;">Become friends too?</li></a>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="friends">
                    <ul>
                        <h1></h1>
                        <a href="http://www.iimusic.net/"><li>Pause music</li></a>
                        <a href="http://notch.tumblr.com/"><li>Notch</li></a>
                        <a href="http://adamatomic.com/"><li>Adam Atomic</li></a>
                        <a href="http://halfbot.com/"><li>Halfbot</li></a>
                        <a href="http://www.dutchgamegarden.nl/"><li>Dutch Game Garden</li></a>
                        <a href="http://brandonnn.tumblr.com/"><li>Brandon Boyer</li></a>
                        <a href="http://www.bramruiter.nl/"><li>Bram Ruiter</li></a>
                        <a href="http://www.bitcollective.ca/"><li>Bit Collective</li></a>
                        <a href="http://www.glitchhiker.com/"><li>Aardbever</li></a>

                    </ul>
                </div>
            </div>
            <div id="twitter-feed">

            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{{asset('js/giantbomb.js')}}"></script>
    <script src="{{asset('js/games.js')}}"></script>
    <script src="{{asset('js/css3-animate-it.js')}}"></script>
    <script src="{{asset('js/twitterfeed.js')}}"></script>
</body>
</html>