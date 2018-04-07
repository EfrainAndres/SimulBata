<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
    function initMap() {

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 13,
        center: {lat: 4.8216228, lng: -74.3465695}
        
    });

    var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    var markers = locations.map(function(location, i) {
        return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
        });
    });

    // Add a marker clusterer to manage the markers.
    var markerCluster = new MarkerClusterer(map, markers,
        {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
    }

    var locations = [];
    var ult = 0;

    for (i = 0; i < 8625; i++) {
        //Usaquen 8625 ,
        locations[i] = {lat: 4.8216228, lng: -74.3465695};
    }
    ult = i;
    for (i; i < 13041 + ult; i++) {
        //chapinero 1341 , 
        locations[i] = {lat: 4.8216180, lng: -74.3450872};
    }
    ult = i;
    for (i; i < 7439 + ult; i++) {
        //Santafe 7439 
        locations[i] = {lat: 4.8218882, lng: -74.3456681};
    }
    ult = i;
    for (i; i < 6243 + ult; i++) {
        //San Cristobal 6243 , 
        locations[i] = {lat: 4.8216234, lng: -74.3465690};
    }
    ult = i;
    for (i; i < 7134 + ult; i++) {
        //Usme 7134 4.512006, -74.108367
        locations[i] = {lat: 4.8216314, lng: -74.3443965};
    }
    ult = i;
    for (i; i < 6100 + ult; i++) {
        //Tunjuelito 6100 4.560697, 
        locations[i] = {lat: 4.8214837, lng: -74.3460186};
    }
    ult = i;
    for (i; i < 11276 + ult; i++) {
        //Bosa 11276  , 
        locations[i] = {lat: 4.8212646, lng: -74.3464344};
    }
    ult = i;
    for (i; i < 8027 + ult; i++) {
        //Kennedy 8027 , -
        locations[i] = {lat: 4.8216242, lng: -74.3465685};
    }
    ult = i;
    for (i; i < 9404 + ult; i++) {
        //Fontibon 9404 
        locations[i] = {lat:4.82128472, lng: -74.3453940};
    }

    
</script>
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
</script>
<script async defer
     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiOlzGfEKo16xk7RvMLM0iZp8ycIlSvJ0&callback=initMap">
</script>


  </body>
</html>