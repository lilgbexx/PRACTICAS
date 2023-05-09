
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
<h1 id="textomedio">COLECCION $GS COMPANY$</h1>
<div>
  <div class="recomendaciones">

    <div class="card">
      <img src="images/logo.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>PERICO</b></h4>
        <p>A PERICO LE GUSTA EL ALPISTE</p>
      </div>
    </div>
    <div class="card">
      <img src="images/logo.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>PERICO</b></h4>
        <p>A PERICO LE GUSTA EL ALPISTE</p>
      </div>
    </div>
    <div class="card">
      <img src="images/logo.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>PERICO</b></h4>
        <p>A PERICO LE GUSTA EL ALPISTE</p>
      </div>
    </div>


  </div>
</div>

<h1 id="textomedio">COLECCION $GS COMPANY$</h1>


<div class="bajo">
  <div>
    <img id="imagen" src="images/imagen1.jpg" alt="">
  </div>
  <div>
    <img id="imagen" src="images/imagen4.jpg" alt="">
  </div>
  <div>
    <img id="imagen" src="images/imagen3.jpg" alt="">
  </div>
  <div>
    <img id="imagen" src="images/imagen2.jpg" alt="">
  </div>
</div>


<div id="footer">
       
    <img src="images/logo.png" alt="Tu foto" id="imagenelogo">
  
    <div id="footer-right">
      <h1>DERECHOS RESERVADOS © 2023 </h1>
    </div>
  
     <img src="images/logo.png" alt="Tu foto" id="imagenelogo">

</div>


