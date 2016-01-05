<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Vlambeer - Admin</title>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="http://bootswatch.com/yeti/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
<header>
    <img src="{{asset('media/img/logo.png')}}" alt="logo" width="55px" height="50px">
    
    <div class="user">
        <img src="http://www.lorempixel.com/40/40" alt="">
        <h4>{{Auth::user()->email}}</h4>
        <a href="auth/logout" class="dropdown"><i class="fa fa-sign-out fa-2x"></i></a>
    </div>

<h1>Header</h1> 

</header>
<main>
    <aside class="col-md-2">
        <form action="" method="">
            <input id="filter" type="text" placeholder="Search" />
            <i id="filtersubmit" class="fa fa-search"></i>
        </form>
        <nav>
            <ul>
                <li><a href="{{ action("PagesController@admin") }}"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
                <li><button id="eCommerce"><i class="fa fa-shopping-cart fa-fw"></i>eCommerce</button></li>
                <ul id="eCommerceNav">
                    <li><a href="{{ action("OrdersController@index") }}"><i class="fa fa-tags fa-fw"></i>Orders</a></li>
                    <li><a href=""><i class="fa fa-line-chart fa-fw"></i>Products</a></li>
                </ul>
                <li><button id="customer"><i class="fa fa-user fa-fw"></i>Customers</button></li>
                <ul id="customersNav">
                    <li><a href="{{ action("CustomersController@index") }}"><i class="fa fa-users fa-fw"></i>Customers view</a></li>
                    <li><a href="{{ action("CustomersController@create") }}"><i class="fa fa-user-plus fa-fw"></i>Customer add</a></li>
                </ul>
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
<script>$(document).ready(function(){
            $("#eCommerce").click(function(){
                $("#eCommerceNav").toggle();
            });

            $("#customer").click(function(){
                $("#customersNav").toggle();
            });
        });
</script>
<script src="http://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
<script type="text/javascript"></script>
</body>
</html>