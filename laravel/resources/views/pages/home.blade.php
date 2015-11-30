@extends('base')

@section('content')
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">


            <div class="row row-game-item">

                <div class="game-item col-md-4 panel-heading">
                    <div class="content panel-title">
                        <a class="btn btn-primary game-img" data-toggle="collapse" data-parent="#accordion" href="#gunGodz">
                            <img src="../resources/assets/img/gungodz.png" alt="GunGodz" width="350" height="200">
                        </a>
                    </div>
                </div>
                <div class="game-item col-md-4 panel-heading">
                    <div class="content panel-title">
                        <a class="btn btn-primary game-img" data-toggle="collapse" data-parent="#accordion" href="#lufTrausers">
                            <img src="../resources/assets/img/luftrausers.png" alt="luftrausers" width="350" height="200">
                        </a>
                    </div>
                </div>
                <div class="game-item col-md-4 panel-heading">
                    <div class="content panel-title">
                        <a class="btn btn-primary game-img" data-toggle="collapse" data-parent="#accordion" href="#nuclear-Throne">
                            <img src="../resources/assets/img/nuclear_throne.png" alt="Nuclear Throne" width="350" height="200">
                        </a>
                    </div>
                </div>
            </div>

            {{--these are the texts which are being dropped down when you click on a link--}}
            <div class="panel-collapse collapse" id="gunGodz">
                <div class="panel-body">
                    <p><a href="{{ action("PagesController@product",'id=3030-37491') }}">Gun Godz</a></p>
                    <a href="http://vlambeer.com/downloads/special/GUNGODZ.rar" target="_blank">
                        <img src="../resources/assets/img/downloadIcon.png" alt="download" height="25px" width="25px">
                    </a>
                </div>
            </div>
            <div class="panel-collapse collapse" id="lufTrausers">
                <div class="panel-body">
                    <p><a href="">Luftrausers</a></p>
                    <a href="http://store.steampowered.com/app/233150/" target="_blank">
                        <img src="../resources/assets/img/steam.ico" alt="steam" height="25px" width="25px">
                    </a>
                    <a href="https://www.playstation.com/en-us/games/luftrausers-ps3/" target="_blank">
                        <img src="../resources/assets/img/PSN.png" alt="steam" height="25px" width="25px">
                    </a>
                </div>
            </div>
            <div class="panel-collapse collapse" id="nuclear-Throne">
                <div class="panel-body">
                    <p><a href="">Nuclear Throne</a></p>
                    <a href="http://store.steampowered.com/app/242680/" target="_blank">
                        <img src="../resources/assets/img/steam.ico" alt="steam" height="25px" width="25px">
                    </a>
                </div>
            </div>

            <div class="row row-game-item">
                <div class="game-item col-md-4 panel-heading">
                    <div class="content panel-title">
                        <a class="btn btn-primary game-img" data-toggle="collapse" data-parent="#accordion" href="#ridiculous-Fishing">
                            <img src="../resources/assets/img/Ridiculous-Fishing.png" alt="Ridiculous Fishing" width="350" height="200">
                        </a>
                    </div>
                </div>
                <div class="game-item col-md-4 panel-heading">
                    <div class="content panel-title">
                        <a class="btn btn-primary game-img" data-toggle="collapse" data-parent="#accordion" href="#serious-Sam">
                            <img src="../resources/assets/img/serious-sam.jpg" alt="Serious Sam" width="350" height="200">
                        </a>
                    </div>
                </div>
                <div class="game-item col-md-4 panel-heading">
                    <div class="content panel-title">
                        <a class="btn btn-primary game-img" data-toggle="collapse" data-parent="#accordion" href="#super-Crate-Box">
                            <img src="../resources/assets/img/super-crate-box.jpg" alt="Super Crate Box" width="350" height="200">
                        </a>
                    </div>
                </div>
            </div>

            {{--these are the texts which are being dropped down when you click on a link--}}
            <div class="panel-collapse collapse" id="ridiculous-Fishing">
                <div class="panel-body">
                    <p><a href="">Ridiculous Fishing</a></p>
                    <a href="https://itunes.apple.com/us/app/ridiculous-fishing-tale-redemption/id601831815?mt=8" target="_blank">
                        <img src="../resources/assets/img/App-store.ico" alt="app store" height="25px" width="25px">
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=com.vlambeer.RidiculousFishing" target="_blank">
                        <img src="../resources/assets/img/Play-store.ico" alt="play store" height="25px" width="25px">
                    </a>
                </div>
            </div>
            <div class="panel-collapse collapse" id="serious-Sam">
                <div class="panel-body">
                    <p><a href="">Serious Sam: The Random Encounter</a></p>
                    <a href="http://store.steampowered.com/app/201480/" target="_blank">
                        <img src="../resources/assets/img/steam.ico" alt="steam" height="25px" width="25px">
                    </a>
                </div>
            </div>
            <div class="panel-collapse collapse" id="super-Crate-Box">
                <div class="panel-body">
                    <p><a href="">Super Crate Box</a></p>
                    <a href="http://store.steampowered.com/app/212800/" target="_blank">
                        <img src="../resources/assets/img/steam.ico" alt="steam" height="25px" width="25px">
                    </a>
                    <a href="https://itunes.apple.com/us/app/super-crate-box/id483025428?mt=8" target="_blank">
                        <img src="../resources/assets/img/App-store.ico" alt="app store" height="25px" width="25px">
                    </a>

                </div>
            </div>

            <div class="row row-game-item">
                <div class="game-item col-md-4 panel-heading">
                    <div class="content panel-title">
                        <a class="btn btn-primary game-img" data-toggle="collapse" data-parent="#accordion" href="#super-bread-box">
                            <img src="../resources/assets/img/super-bread-box.png" alt="Super Bread Box" width="350" height="200">
                        </a>
                    </div>
                </div>
            </div>

            <div class="panel-collapse collapse" id="super-bread-box">
                <div class="panel-body">
                    <p><a href="">Super Bread Box</a></p>
                    <a href="https://play.google.com/store/apps/details?id=com.vlambeer.RidiculousFishing" target="_blank">
                        <img src="../resources/assets/img/Commodore-64.png" alt="play store" height="25px" width="25px">
                    </a>
                </div>
            </div>





        </div>

    </div>


@stop
