@extends('layouts.app')

@section('content')
<!DOCTYPE html>
 <html>
  <head>
    <style>
       #map {
        height: 600px;
        width: 1200px;
       }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 43.650000, lng: 0.583333};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5X7KweojFaDcKUPgFohYi-eA6D1B4Sps&callback=initMap">
    </script>
  </body>
</html>
@endsection

