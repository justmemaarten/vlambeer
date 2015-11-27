<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vlambeer</title>
    <link rel="stylesheet" href="http://bootswatch.com/yeti/bootstrap.min.css"/>
    <link rel="stylesheet" href="../resources/assets/css/style.css">
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="../resources/assets/js/custom.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
    <header class="container">

        <nav  data-spy="affix">
            <div class="dropdown">
                <a href="">Home</a>
                <button id="dropGames" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Games
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropGames">
                    <li>
                        <a href="#">Luftrausers</a>
                    </li>
                    <li>
                        <a href="#">Nuclear Throne</a>
                    </li>
                    <li>
                        <a href="#">Rediculous Fishing - A tale of Redemption</a>
                    </li>
                    <li>
                        <a href="#">Gun Godz</a>
                    </li>
                    <li>
                        <a href="#">Serious Sam: The Random Encounter</a>
                    </li>
                    <li>
                        <a href="#">Super Crate Box</a>
                    </li>
                </ul>
                <a href="">Contact</a>
                <a href="">About</a>
            </div>
        </nav>
    </header>
    <div class="container">
        <div id="quote"></div>

        @yield('content')


    </div>
    <footer>
        <div class="container">

        </div>
    </footer>

</body>
</html>