<?php
/**
 * Created by PhpStorm.
 * User: aylos
 * Date: 18/3/2018
 * Time: 6:59 م
 */

if(isset($_POST['submit'])){

    $dis = $_POST['dis'];
    $cat = $_POST['cat'];
    $query = $_POST['query'];


    echo $dis;
    echo $cat;
    echo $query;

}?>

<html>

<head>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
</head>

<body>
<p>Ads: <p id="dis"></p></p>
</body>

<script type="text/javascript" charset="utf-8">
    var long;
    var lati;
    $(document).ready(function() {
        var currgeocoder;

        //Set geo location lat and long

        navigator.geolocation.getCurrentPosition(function(position) {

            geo_loc = processGeolocationResult(position);
            currLatLong = geo_loc.split(",");
            initializeCurrent(currLatLong[0], currLatLong[1]);

        });

        //Get geo location result

        function processGeolocationResult(position) {
            html5Lat = position.coords.latitude; //Get latitude
            html5Lon = position.coords.longitude; //Get longitude
            html5TimeStamp = position.timestamp; //Get timestamp
            html5Accuracy = position.coords.accuracy; //Get accuracy in meters
            return (html5Lat).toFixed(8) + ", " + (html5Lon).toFixed(8);
        }


        function initializeCurrent(latcurr, longcurr) {
            currgeocoder = new google.maps.Geocoder();
            console.log(latcurr + "-- ######## --" + longcurr);

            if (latcurr != '' && longcurr != '') {
                var myLatlng = new google.maps.LatLng(latcurr, longcurr);
                long = longcurr;
                lati = latcurr;

                $.post('test4.php?lat=' + lati + '&lon=' + long + '&dis=<?php echo $dis;?>', function (response) {

                    if (response == "error") {
                        $("#dis").html('error');
                    } else{
                        $("#dis").html(response);
                    }
                });

                return getCurrentAddress(myLatlng);
            }
        }

        //Get current address

        function getCurrentAddress(location) {
            currgeocoder.geocode({
                'location': location

            }, function(results, status) {

                if (status == google.maps.GeocoderStatus.OK) {
                    console.log(results[0]);
                } else {
                    alert('Geocode was not successful for the following reason: ' + status);
                }
            });
        }
    });


</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcH2huiDBaDIkLnb691-9MIn-MhALCCGk&callback=initMap">
</script>

