<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"] == "admin") {
        require_once("vista/base3.php");
       


 




  
  



    } else {
        require_once("vista/base2.php");
       









    
    }
} else {
    require_once("vista/base.php");
  















}
?>




<div id="map" style="height: 50%; width: 100%; text-align: center"></div>

<div id="footer">

  <div class="footer-left">
    <img src="images/logo.png" alt="Tu foto">
  </div>

  <div class="footer-right">
    <h1>DERECHOS RESERVADOS © 2023 </h1>

  </div>


  <div class="footer-left">
    <img src="images/logo.png" alt="Tu foto">
  </div>
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