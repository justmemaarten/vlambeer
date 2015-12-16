<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vlambeer - Admin</title>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="http://bootswatch.com/yeti/bootstrap.min.css"/>
</head>
<body>
<header>
    <h4>{{Auth::user()->email}}</h4>
    <form action="" method="">
        <input type="text" placeholder="Search...">
        <input type="submit" value="Search">
    </form>

<h1>Header</h1> 
</header>
<main>
    <aside class="col-md-3">
        <nav>
            <ul>
                <li><a href="">Dashboard</a></li>
                <li><a href="">Customers</a></li>
                <li><a href="">Dashboard</a></li>
                <li><a href="">Dashboard</a></li>
                <li><a href="">Dashboard</a></li>
            </ul>
        </nav>
    </aside>
    <div class="content col-md-9">
        @yield('admin')
    </div>

</main>
<footer>

</footer>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</body>
</html>