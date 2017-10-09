@extends('layouts.app')

@section('content')
<!DOCTYPE html>
 <html>
  <head>
    <style>
       #map {
        height: 100%;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5X7KweojFaDcKUPgFohYi-eA6D1B4Sps&callback=initMap">
    </script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
@endsection
