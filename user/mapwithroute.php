<?php
//include 'connection.php';
ob_start();
//session_start();
//$usr=$_SESSION['uid'];
$sla=$_GET['la'];
$slo=$_GET['lo'];
$dla=$_GET['dla'];
$dlo=$_GET['dlo'];
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            html,
body,
#map-canvas {
  height: 100%;
  width: 100%;
  margin: 0px;
  padding: 0px
}
        </style>
        <link href="temp/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    </head>
    <body>
         <script async defer
         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=initMap"></script>
        <script>
        function initMap() {
    var directionsDisplay;
    var directionsService = new google.maps.DirectionsService();
    var map;

    function initialize() {
        directionsDisplay = new google.maps.DirectionsRenderer();
        var uluru = new google.maps.LatLng(<?php echo $sla ?>, <?php echo $slo ?>);
        var mapOptions = {
            zoom: 15,
            center: uluru,
        };
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        directionsDisplay.setMap(map);
        google.maps.event.addDomListener(document.getElementById('routebtn'), 'click', calcRoute);
    }

    function calcRoute() {
        var start = new google.maps.LatLng(<?php echo $sla ?>, <?php echo $slo ?>);
        //var end = new google.maps.LatLng(38.334818, -181.884886);
        var end = new google.maps.LatLng(<?php echo $dla ?>, <?php echo $dlo ?>);
/*        
var startMarker = new google.maps.Marker({
            position: start,
            map: map,
            draggable: true
        });
        var endMarker = new google.maps.Marker({
            position: end,
            map: map,
            draggable: true
        });
*/
        var bounds = new google.maps.LatLngBounds();
        bounds.extend(start);
        bounds.extend(end);
        map.fitBounds(bounds);
        var request = {
            origin: start,
            destination: end,
            travelMode: google.maps.TravelMode.DRIVING
        };
        directionsService.route(request, function (response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                directionsDisplay.setDirections(response);
                directionsDisplay.setMap(map);
            } else {
                alert("Directions Request from " + start.toUrlValue(6) + " to " + end.toUrlValue(6) + " failed: " + status);
            }
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
}
mapLocation();
        </script>
        <input type="button" id="routebtn" value="Find Route" /> <span class="glyphicon glyphicon-map-marker" style="color: green;"></span>
       <div id="map-canvas"></div>
    </body>
</html>
