@extends('base')

@section('content')

    <div class="container">
        <h1>Contact</h1>
        <div class="row">
            <div class="col-md-4">
                <p>info@vlambeer.com Neude 5,<br> 3512 AD, Utrecht, <br> the Netherlands </p>
            </div>
            <div class="col-md-4">
                <p>Looking for us? Check out the map below! this is where we work if you want
                   to stop by make an appointment!</p>
            </div>
            <div class="col-md-4">
                <p>If you fill in the form below, we will get your message and contact you back as soon as possible!</p>
            </div>
            <form class="col-md-4 pull-right" action="../../../app/mail.php" method="post">
                <div class="form-group">
                    <label for="">Firstname</label>
                    <input type="text" name="firstname"  placeholder="Firstname" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Lastname</label>
                    <input type="text" name="lastname" placeholder="Lastname" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="Email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Message</label>
                    <textarea name="message" id="" cols="30" rows="10" placeholder="Type you're message here!" class="form-control" required></textarea>
                </div>

                <input type="submit" name="button_pressed" class="btn btn-primary">
            </form>



        <div class="col-md-8 pull-left">
            <div id="map">
                <script type="text/javascript">
                    var locations = [
                        ['School', 51.60677, 4.77753, 2],
                    ];

                    var map = new google.maps.Map(document.getElementById('map'), {
                        center: new google.maps.LatLng(51.55989, 4.71176),
                        zoom: 12,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    });

                    var infowindow = new google.maps.InfoWindow();

                    var marker, i;

                    var weatherLayer = new google.maps.weather.WeatherLayer({
                        temperatureUnits: google.maps.weather.TemperatureUnit.CELCIUS
                    });
                    weatherLayer.setMap(map);

                    var cloudLayer = new google.maps.weather.CloudLayer();
                    cloudLayer.setMap(map);

                    var trafficLayer = new google.maps.TrafficLayer();
                    trafficLayer.setMap(map);

                    var transitLayer = new google.maps.TransitLayer();
                    transitLayer.setMap(map);

                    for (i = 0; i < locations.length; i++) {
                        marker = new google.maps.Marker({
                            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                            map: map
                        });

                        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                            return function() {
                                infowindow.setContent(locations[i][0]);
                                nfowindow.open(map, marker);
                            }
                        })(marker, i));
                    }
                </script>
            </div>
        </div>
    </div>
    </div>

@stop
