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