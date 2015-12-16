<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vlambeer - Admin</title>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="http://bootswatch.com/yeti/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
<header>
    <div class="user">
        <img src="http://www.lorempixel.com/40/40" alt="">
        <h4>{{Auth::user()->email}}</h4>
        <a href="auth/logout" class="dropdown"><i class="fa fa-sign-out fa-2x"></i></a>
    </div>

    <form action="" method="">
        <input type="text" placeholder="Search...">
        <input type="submit" value="Search">
    </form>
</header>
<main>
    <aside class="col-md-2">
        <nav>
            <ul>
                <li><a href="">Dashboard</a></li>
                <button id="btnOpen1" type="button" onclick="show('eCommerce');">eCommerce / Open</button>
                <button style="display: none" id="btnClose1" type="button" onclick="close()">eCommerce / Close</button>
                <div style="display: none;" id="eCommerce">
                    <ul>
                        <li><a href="">Orders</a></li>
                        <li><a href="">Products</a></li>
                    </ul>
                </div>
                {{--<div id="id2">text 2</div>--}}
                {{--<div id="id3">text 3</div>--}}
                <li><a href="">Dashboard</a></li>
                <li><a href="">Dashboard</a></li>
                <li><a href="">Dashboard</a></li>
            </ul>
        </nav>
    </aside>
    <div class="content col-md-10">
        @yield('admin')
    </div>

</main>
<footer>

</footer>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
    function show(elementId) {
        document.getElementById("eCommerce").style.display="block";
        document.getElementById("btnOpen1").style.display="none";
        document.getElementById("btnClose1").style.display="block";
        document.getElementById(elementId).style.display="block";
    }

    function close() {
        document.getElementById("eCommerce").style.display="none";
        document.getElementById("btonOpen1").style.display="block";
        document.getElementById("btnClose1").style.display="none";
//        document.getElementById(elementId).style.display="block";
    }
</script>
</body>
</html>