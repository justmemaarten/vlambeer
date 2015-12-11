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
<div class="animatedParent animateOnce">
    <header data-spy="affix" class="animated fadeInDownShort slowest">

        <div class="container animatedParent">
            <div id="sub" class="animated fadeInLeftShort"></div>
            <a href="{{ action("PagesController@home") }}"><img src="{{ asset('media/img/logo.png') }}" alt="Logo" height="90px" width="100px" class="animatedClick animated clickExample pulse" data-target='clickExample'></a>
            <nav>
                <div class="dropdown">
                    <ul>
                        <li>
                            <a href="{{ action("PagesController@home") }}" role="button">Home</a> |
                        </li>
                        <li>
                            <div class="dropdown">
                                <button id="dropGames" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Games
                                    <span class="caret"></span>
                                </button> |
                                <ul class="dropdown-menu" aria-labelledby="dropGames">
                                    <li>
                                        <a href="{{ action("PagesController@product",'id=3030-37491') }}">Gun Godz</a>
                                    </li>
                                    <li>
                                        <a href="{{ action("PagesController@product",'id=3030-39474') }}">Luftrausers</a>
                                    </li>
                                    <li>
                                        <a href="{{ action("PagesController@product",'id=3030-41999') }}">Nuclear Throne</a>
                                    </li>
                                    <li>
                                        <a href="{{ action("PagesController@product",'id=3030-40158') }}">Rediculous Fishing</a>
                                    </li>
                                    <li>
                                        <a href="{{ action("PagesController@product",'id=3030-34402') }}">Serious Sam</a>
                                    </li>
                                    <li>
                                        <a href="{{ action("PagesController@product",'id=3030-32945') }}">Super Crate Box</a>
                                    </li>
                                    <li>
                                        <a href="{{ action("PagesController@product",'id=3030-46090') }}">Super Bread Box</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="" role="button">Contact</a> |
                        </li>
                        <li>
                            <a href="" role="button">About</a> |
                        </li>
                        <li>
                    @if (!Auth::check())
                    <button type="button" class="dropdown" data-toggle="modal" data-target="#login-register">
                        Login / Register
                    </button>
                    @else
                        <a href="auth/logout" class="dropdown">Logout</a>
                    @endif
                        </li>
                </div>

                </ul>
            </nav>

        </div>


    </header>
</div>

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
                                @include('auth/login')
                            </div>

                        <div role="tabpanel" class="tab-pane" id="register">
                            @include('auth/register')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container animatedParent animateOnce">
        @if (Session::has('authMessage'))
            {{ Session::get('authMessage') }}
        @endif
        <div class="animated fadeInDownShort" id="quote"></div>

        @yield('content')


    </div>
    <footer>
        <div class="container animatedParent">
            <div class="col-md-5">
                <div id="info">
                    <div class="about-us">
                        <strong>VLAMBEER IS A DUTCH INDEPENDENT GAME STUDIO</strong><p> made up of Rami Ismail and Jan Willem Nijman, bringing back arcade games since 1978.</p>
                    </div>

                    <div class="team-rami">
                        <img class="animated tada" src="{{asset('media/images/team_rami.png')}}">
                        <div class="team-info">
                            <strong>Rami Ismail</strong><br>
                            <i>Business and Development</i><br>
                            rami@vlambeer.com<br>
                            <a href="http://twitter.com/tha_rami" target="_blank">@tha_rami</a><br>
                        </div>
                    </div>

                    <div class="team-jw animatedParent">
                        <img class="animated tada" src="{{asset('media/images/team_jw.png')}}">
                        <div class="team-info">
                            <strong>Jan Willem Nijman</strong><br>
                            <i>Game Design</i><br>
                            jw@vlambeer.com<br>
                            <a href="http://twitter.com/jwaaaap" target="_blank">@jwaaaap</a><br>
                        </div>
                    </div>

                    <div class="contact">info@vlambeer.com | Neude 5, 3512 AD, Utrecht, the Netherlands | +31621206363</div>
                </div>
            </div>
            <div class="col-md-4">
                <strong>FRIENDS OF VLAMBEER</strong>
                <div class="col-md-6">
                    <div class="friends">
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
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="friends">
                        <ul>
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
                <a href="http://www.facebook.com/Vlambeer"><li style="color:#fff;">Become friends too?</li></a>
            </div>
            <div class="animated fadeIn" id="twitter-feed">

            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/css3-animate-it.js') }}"></script>
    <script src="{{ asset('js/twitterfeed.js') }}"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/giantbomb.js') }}"></script>
    <script src="{{ asset('js/games.js') }}"></script>

</body>
</html>