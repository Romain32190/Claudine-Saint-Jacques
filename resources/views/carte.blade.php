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
    <script >
      function initMap(){
        var latLng = {lat:  44.608288, lng: 2.032871};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: latLng
        });

          fetch("steps")
          .then((response)=>{return response.json()})
          .then(function(data){
            for(var i = 0; i < data.length; i++ ){
              var marker = new google.maps.Marker({
                position: new google.maps.LatLng(data[i].latitude, data[i].longitude),
                map: map,
                title: data[i].name
              });
              var infowindow = new google.maps.InfoWindow({
                content: data[i].name
              });
            }
            console.log(data);
          });
}
    </script>
  </body>
</html>
@endsection
