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
        center: {lat: 4.8216228, lng: -74.3465695},
        styles: [
            {elementType: 'geometry', stylers: [{color: '#ebe3cd'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#263c3f'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6b9a76'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#212a37'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9ca5b3'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#746855'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#1f2835'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f3d19c'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#17263c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#515c6d'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#17263c'}]
            }
          ]
        
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

    for (i = 0; i < 180; i++) {
        //Usaquen 8625 ,
        locations[i] = {lat: 4.8216228, lng: -74.3465695};
    }
    ult = i;
    for (i; i < 320 + ult; i++) {
        //chapinero 1341 , 
        locations[i] = {lat: 4.8216180, lng: -74.3450872};
    }
    ult = i;
    for (i; i < 180 + ult; i++) {
        //Santafe 7439 
        locations[i] = {lat: 4.8218882, lng: -74.3456681};
    }
    ult = i;
    for (i; i < 320 + ult; i++) {
        //San Cristobal 6243 , 
        locations[i] = {lat: 4.8216234, lng: -74.3465690};
    }
    ult = i;
    for (i; i < 320 + ult; i++) {
        //Usme 7134 4.512006, -74.108367
        locations[i] = {lat: 4.8216314, lng: -74.3443965};
    }
    ult = i;
    for (i; i < 180 + ult; i++) {
        //Tunjuelito 6100 4.560697, 
        locations[i] = {lat: 4.8214837, lng: -74.3460186};
    }
    ult = i;
    for (i; i < 320 + ult; i++) {
        //Bosa 11276  , 
        locations[i] = {lat: 4.8212646, lng: -74.3464344};
    }
    ult = i;
    for (i; i < 240 + ult; i++) {
        //Kennedy 8027 , -
        locations[i] = {lat: 4.8216242, lng: -74.3465685};
    }
    ult = i;
    for (i; i < 320 + ult; i++) {
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