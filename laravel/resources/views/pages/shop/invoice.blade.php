<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vlambeer Invoice</title>

    <link rel="stylesheet" href="http://bootswatch.com/yeti/bootstrap.min.css"/>
    <style>
        @media print {
            #printbtn {
                        display :  none;
            }
    }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('media/img/logo.png') }}" alt="Logo" height="90px" width="100px" class="pull-left">
            <div class="row">
            <div class="col-xs-6 text-right">
                <h1><small>Invoice for {{ $user['firstname'] }} {{ $user['lastname'] }} </small></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-5">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>From: Vlambeer</h4>
                    </div>
                    <div class="panel-body">
                        <p>
                            Address: &nbsp; &nbsp; &nbsp; Neude 5 <br>
                            Zipcode: &nbsp; &nbsp; &nbsp; 3512 AD, Utrecht <br>
                            Telephone: &nbsp; +31621206363 <br>
                            Email: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; info@vlambeer.com <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-5 col-xs-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>To : {{ $user['firstname'] }} {{ $user['lastname'] }}</h4>
                    </div>
                    <div class="panel-body">
                        <p>
                            Address: &nbsp; &nbsp; &nbsp; {{ $user['street'] }} {{ $user['house_nr'] }}<br>
                            Zipcode: &nbsp; &nbsp; &nbsp; {{ $user['postalcode'] }} {{ $user['city'] }} <br>
                            Telephone: &nbsp; {{ $user['phone_nr'] }}<br>
                            Email: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {{ $user['email'] }} <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- / end client details section -->
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>
                    <h4>Product</h4>
                </th>
                <th>
                    <h4>Description</h4>
                </th>
                <th>
                    <h4>Amount</h4>
                </th>
                <th>
                    <h4>Price</h4>
                </th>
                <th>
                    <h4>Sub Total</h4>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product => $data)
                @if(isset($data['category_id']))
                    <?php $productI = \App\Product::where('product_id', $data['product_id'])->first() ?>
                    <tr>
                        <td>{{ $productI['name'] }}</td>
                        <td>{{ $productI['description'] }}</td>
                        <td class="text-right">{{ $data['amount'] }}</td>
                        <td class="text-right">{{ $productI['price'] }}</td>
                        <td class="text-right">{{ $data['amount'] * $productI['price']  }}</td>
                    </tr>
                @endif
            @endforeach

            </tbody>
        </table>
        <div class="row text-right">
            <div class="col-xs-2 col-xs-offset-8">
                <p>
                    <strong>
                        Sub Total : <br>
                        TAX : <br>
                        Total : <br>
                    </strong>
                </p>
            </div>
            <div class="col-xs-2">
                <strong>
                    {{ $products['totalprice'] }} <br>
                    {{round((float)$products['btw'] * 100 )}}% <br>
                    {{$products['totalprice'] * (1+$products['btw'])}} <br>
                </strong>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-5">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4>Bank details</h4>
                    </div>
                    <div class="panel-body">
                        <p>Name: Vlambeer</p>
                        <p>Bank Name: ING</p>
                        <p>SWIFT : INGBNL2A </p>
                        <p>IBAN : NL60 INGB 0003 8811 71</p>
                        <p>Description : {{ $user['username']}} invoice merchendise payment</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-7">
                <div class="span7">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>Contact Details</h4>
                        </div>
                        <div class="panel-body">
                            <p>
                                Email : info@vlambeer.com  <br><br>
                                Telephone : +31621206363 <br> <br>
                            </p>
                            <h4>Payment should be made with Paypal or Mollie</h4>
                        </div>
                    </div>
                </div>
                <div class="buttons">
                    <a id="printbtn" class="btn btn-primary no-print" href="javascript:window.print()">Print</a>
                </div>
            </div>
        </div>
    </div>
</body>