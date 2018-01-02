{{-- <div style="width: 500px; height: 500px;">
	{!! Mapper::render() !!}
</div>
--}}

{{-- @foreach ($items as $item)
@php
$id = $item->getId();
echo $id;
$formatted_address = $item->getFormattedAddress();
echo $formatted_address;
@endphp
@endforeach --}}

{{-- {{ $data->city->name }} --}}


<!DOCTYPE html>
<html>
  <head>
    <title>Cari tempat</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      #map {
        height: 100%;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .controls {
        background-color: #fff;
        border-radius: 2px;
        border: 1px solid transparent;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        box-sizing: border-box;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        height: 29px;
        margin-left: 17px;
        margin-top: 10px;
        outline: none;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      .controls:focus {
        border-color: #4d90fe;
      }
      .title {
        font-weight: bold;
      }
      #infowindow-content {
        display: none;
      }
      #map #infowindow-content {
        display: inline;
      }

    </style>
  </head>
  <body>
    <input id="cari" class="controls" type="text" placeholder="Masukan Alamat">
    <div id="map"></div>
    <a href="" id="go">klik aku dong

    <div id="infowindow-content">
      <span id="nama-tempat"  class="title"></span>
      <br>
      ID lokasi <span id="id-tempat"></span>
      <br>
      <span id="alamat"></span>
      <br>
      <span id="lalo"></span>
    </div>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -6.1750, lng: 116.8283},
          zoom: 5
        });

        var input = document.getElementById('cari');

        var autocomplete = new google.maps.places.Autocomplete(
            input, {placeIdOnly: true});
        autocomplete.bindTo('bounds', map);

        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);

        var geocoder = new google.maps.Geocoder;
        var marker = new google.maps.Marker({
          map: map
        });

        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          var place = autocomplete.getPlace();

          if (!place.place_id) {
            return;
          }
          geocoder.geocode({'placeId': place.place_id}, function(results, status) {

            if (status !== 'OK') {
              window.alert('Google API Error: ' + status);
              return;
            }

            map.setZoom(19);
            map.setCenter(results[0].geometry.location);
            marker.setPlace({
              placeId: place.place_id,
              location: results[0].geometry.location
            });

            marker.setVisible(true);
            infowindowContent.children['nama-tempat'].textContent = place.name;
            infowindowContent.children['id-tempat'].textContent = place.place_id;
            infowindowContent.children['alamat'].textContent = results[0].formatted_address;
            infowindowContent.children['lalo'].textContent = results[0].geometry.location;
            infowindow.open(map, marker);

            var url = results[0].geometry.location.toString();
            document.getElementById("go").href = "/detail/"+url.slice(1,-1).replace(/\s/g, '');
          });
        });
      }      
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWjO5SevIcwYGgnch9sRr9RYAU_704tUs&libraries=places&callback=initMap" async defer>
    	
    </script>
  </body>
</html>