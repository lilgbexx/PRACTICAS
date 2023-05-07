<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"] == "admin") {
        require_once("vista/base3.php");


    } else {
        require_once("vista/base2.php");

    }
} else {
    require_once("vista/base.php");
  
    ?>
   

<?php
}
?>

<div>
      <h1>LOCALIZANOS AQUI</h1>
      <h4>
          <a href="https://www.google.com/maps/dir//UCAM+Universidad+Cat%C3%B3lica+San+Antonio+de+Murcia,+Av.+de+los+Jer%C3%B3nimos,+135,+30107+Guadalupe+de+Maciascoque,+Murcia/@37.9911115,-1.1870928,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0xd6380384e21bc4d:0x6f8f4ea9f358e209!2m2!1d-1.1851961!2d37.9914114">*</a>
      </h4>
</div>


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