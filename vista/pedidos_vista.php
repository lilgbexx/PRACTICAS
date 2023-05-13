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

<div id="footer">
       
    <img src="images/logo.png" alt="Tu foto" id="imagenelogo">
  
    <div id="footer-right">
      <h1>DERECHOS RESERVADOS © 2023 </h1>
    </div>
  
     <img src="images/logo.png" alt="Tu foto" id="imagenelogo">

</div>