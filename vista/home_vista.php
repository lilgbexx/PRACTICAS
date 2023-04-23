
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


