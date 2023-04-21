<?php
require_once("Vista/base.php");
?>



  <div style="height: 1080px; width: 1999px; overflow: hidden; position: relative">
  <div id="map" style="height: 100%; width: 100%"> </div>
</div>

<script>
    function initMap() {
  var map;
  map = new google.maps.Map(document.getElementById('map'), {
    center: { lat: 37.99229388769356, lng: -1.1305549432182505 },
    zoom: 13
  });

  var marker = new google.maps.Marker({
    position: { lat: 38.0174462, lng: -1.1467227},
    map: map,
    title: 'EL PUNTAL'
  });

  var marker2 = new google.maps.Marker({
    position: { lat: 37.99229388769356, lng: -1.1305549432182505 },
    map: map,
    title: 'Plaza Circular'
  });

  var marker3 = new google.maps.Marker({
    position: { lat: 37.9910911, lng: -1.1847342 },
    map: map,
    title: 'UCAM'
  });

  
}

window.onload = function() {

  initMap();

} 

</script>