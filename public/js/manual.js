//Konfigurasi sidebar dan menu
$(".buka").on("click", function() {
   $(".ui.sidebar").toggleClass("very thin icon");
   $(".asd").toggleClass("marginlefting");
   $(".sidebar z").toggleClass("displaynone");
   $(".ui.accordion").toggleClass("displaynone");
   $(".ui.dropdown.item").toggleClass("displaynone");
   $(".logo").find('img').toggle();
});

$(".ui.dropdown.item").dropdown({
   allowCategorySelection: true,
   transition: "fade up",
   context: 'sidebar',
   on: "hover"
});

$('.ui.accordion').accordion({
   selector: {
   }
});

//js editPerbandingan
function Tsuhu(){
   $('#suhu').progress('increment');
}

function Ksuhu(){
   $('#suhu').progress('decrement');
}

function Tkelembaban(){
   $('#kelembaban').progress('increment');
}

function Kkelembaban(){
   $('#kelembaban').progress('decrement');
}

function Tph(){
   $('#ph').progress('increment');
}

function Kph(){
   $('#ph').progress('decrement');
}

function Tketinggian(){
   $('#ketinggian').progress('increment');
}

function Kketinggian(){
   $('#ketinggian').progress('decrement');
}

function Tketebalan(){
   $('#ketebalan').progress('increment');
}

function Kketebalan(){
   $('#ketebalan').progress('decrement');
}

function Tkedalaman(){
   $('#kedalaman').progress('increment');
}

function Kkedalaman(){
   $('#kedalaman').progress('decrement');
}

//konfigurasi google map
function initMap() {
   var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -6.1750, lng: 116.8283},
      zoom: 5
   });

   var input = document.getElementById('cari');
   var autocomplete = new google.maps.places.Autocomplete(input, {placeIdOnly: true});
   autocomplete.bindTo('bounds', map);

   var infowindow = new google.maps.InfoWindow();
   var infowindowContent = document.getElementById('informasiTempat');
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
         $("#informasiTempat").removeClass("displaynone");
         infowindowContent.children['nama-tempat'].textContent = place.name;
         infowindowContent.children['id-tempat'].textContent = place.place_id;
         infowindowContent.children['alamat'].textContent = results[0].formatted_address;
         infowindowContent.children['lalo'].textContent = results[0].geometry.location;
         infowindow.open(map, marker);

         var url = results[0].geometry.location.toString();
            document.getElementById("proses").href = "/detail/"+url.slice(1,-1).replace(/\s/g, '');
      });
   });
} 

//konfirmasi delete data
function hapus()
{
   var token = $('#hapus').data('token');
   var urlhapus = $('#hapus').data('slug'); 
   $('.ui.small.modal')
      .modal({
         onApprove: function (e) {
            if (e.hasClass('ya')) {
                $.ajax({
                    url: urlhapus,
                    type: 'post',
                    data: {_method: 'delete', _token :token, },
                    success:function(msg){
                        setTimeout(
                           function() 
                           {
                              location.reload();
                           }, 0001
                        );  
                    }
                  })
            }
         },
         blurring: true,
         transition: 'fade in'
      })
   .modal('show');
}  

// js detail tanaman
function lihat(data)
{
  var detail = data.getAttribute('data-detail');
  var id = '#'+detail;
  $(id).modal({
     blurring : true
  }).modal('show');
}

// js menu admin
$('.ui.dropdown').dropdown({
   on:'hover',
});   