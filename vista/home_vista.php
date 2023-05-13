
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
<h1 id="textomedio">'COLECCION $GS COMPANY$'</h1>
<div>
  <div class="recomendaciones">

    <div class="card">
      <img src="catalogo/Basic Black.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4>BASIC BLACK</h4>
      
      </div>
    </div>
    <div class="card">
      <img src="catalogo/Basic Red.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4>BASIC RED</h4>
      </div>
    </div>
    <div class="card">
      <img src="catalogo/Basic White.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4>BASIC WHITE</h4>
      </div>
    </div>
    


  </div>
</div>

<h1 id="textomedio">'BASIC T-SHIRT $GS COMPANY$'</h1>

<div>
  <div class="recomendaciones">

  <div class="card">
      <img src="catalogo/Basic White.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4>BASIC WHITE</h4>
      </div>
    </div>
    <div class="card">
      <img src="catalogo/Basic Blue.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4>BASIC RED</h4>
      </div>
    </div>

  <div class="card">
      <img src="catalogo/Basic Black.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4>BASIC BLACK</h4>
      
      </div>
    </div>
    
    
    


  </div>
</div>




<div id="footer">
       
    <img src="images/logo.png" alt="Tu foto" id="imagenelogo">
  
    <div id="footer-right">
      <h1>DERECHOS RESERVADOS © 2023 </h1>
    </div>
  
     <img src="images/logo.png" alt="Tu foto" id="imagenelogo">

</div>


