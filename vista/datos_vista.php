
<?php
ob_start();
$id=0;
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"] == "admin") {
        require_once("vista/base3.php");
        if (isset($array_datos)) {
          ?>
              <table id="customers">
              <h1 >USUARIOS CON ACCESO AL CATALOGO</h1>
                  <tr>
                      <th>Usuario</th>
                      <th>NOMBRE</th>
                      <th>APELLIDOS</th>
                      <th>TELEFONO</th>
                      <th>CORREO</th>
                      <th>DIRECCION</th>
                      <th>Borrar</th>
                      <th>Modificar</th>
                  </tr>
                  <?php
                  foreach ($array_datos as $registro) {
                      $contador = 1;
                      if (is_array($registro)) {
                          echo "<tr>";
                          foreach ($registro as $value2) {
                            switch ($contador) {
                                  case '1':
                                      $usuario = $value2;
                                      $id++;
                                      break;
                                  case '2':
                                      $nombre2 = $value2;
                                      break;
                                  case '3':
                                      $apellidos2 = $value2;
                                      break;
                                  case '4':
                                      $telefono2 = $value2;
                                      break;
                                  case '5':
                                      $correo2 = $value2;
                                      break;
                                  case '6':
                                      $direccion2 = $value2;
                                      break;    
                                  default:
                                      $contador = 0;
                                      break;
                              }
                              $contador++;
                              echo "<td>$value2</td>";
                          }
                  ?>
                          <td>
                              <form action="" method="post" id="formulario">
                                  <input type="hidden" name="usuario" value="<?php echo $registro["usuario"] ?>">
                                  <input type="submit" name="borrar" value="Borrar">
                          </td>
                          <?php
                          echo "<td> <input type='hidden' id='usuarioD" . $id . "' value=" . $usuario . " autocomplete='on'>
                                 <input type='hidden' id='nombreD" . $id . "' value=" . $nombre2 . " autocomplete='on'>
                                 <input type='hidden' id='apellidosD" . $id . "' value=" . $apellidos2 . " autocomplete='on'>
                                  <input type='hidden' id='telefonoD" . $id . "' value=" . $telefono2 . " autocomplete='on'>
                                  <input type='hidden' id='correoD" . $id . "' value=" . $correo2 . " autocomplete='on'>
                                  <input type='hidden' id='direccionD" . $id . "' value=" . $direccion2 . " autocomplete='on'>


                              <button type='button' style='background-color:  #08a6df;color: white;  height:60px ; width:116px;font-size:25px' onclick='modificar(" . $id . ")'> Modificar </button> </td>"; ?>
                          </form>
              <?php
                          echo "</tr>";
                      }
                  }
                  echo "</table>";
              }

    } else {
        require_once("vista/base2.php");
        if (isset($array_datos)) {
          ?>
                 <h1 style="text-align=center">ERES UN CLIENTE DE GSCOMPANY</h1>
          <h1>PANEL DE CONTROL DONDE PUEDES INSERTAR, MODIFICAR Y BORRAR TODOS USUARIOS</h1>
          <table id="customers">
          <h1 >USUARIOS CON ACCESO AL CATALOGO</h1>
              <tr>
                  
                  <th>NOMBRE</th>
                  <th>APELLIDOS</th>
                  <th>TELEFONO</th>
                  <th>CORREO</th>
                  <th>DIRECCION</th>
                  <th>USUARIO</th>
                  <th>BORRAR</th>
                  <th>MODIFICAR</th>
              </tr>
              <?php
              foreach ($array_datos as $registro) {
                if(isset($_SESSION["usuario"]) && $_SESSION["usuario"] == $registro["usuario"]){

                  $contador = 1;
                  if (is_array($registro)) {
                      echo "<tr>";
                      foreach ($registro as $value2) {
                        switch ($contador) {
                              case '1':
                                  $usuario = $value2;
                                  $id++;
                                  break;
                              case '2':
                                  $nombre2 = $value2;
                                  break;
                              case '3':
                                  $apellidos2 = $value2;
                                  break;
                                  case '4':
                                    $correo2 = $value2;
                                    break;   
                              case '5':
                                  $direccion2 = $value2;
                                  break;
                              case '6':
                                  $telefono2 = $value2;
                                  break;
                              default:
                                  $contador = 0;
                                  break;
                          }
                          $contador++;
                          echo "<td>$value2</td>";
                      }
              ?>
                      <td>
                          <form action="" method="post" id="formulario">
                              <input type="hidden" name="usuario" value="<?php echo $registro["usuario"] ?>">
                              <input type="submit" name="borrar" value="Borrar">
                      </td>
                      <?php
                      echo "<td> 
                      <input type='hidden' id='usuarioD" . $id . "' value=" . $usuario . " autocomplete='on'>
                      <input type='hidden' id='nombreD" . $id . "' value=" . $nombre2 . " autocomplete='on'>
                      <input type='hidden' id='apellidosD" . $id . "' value=" . $apellidos2 . " autocomplete='on'>
                      <input type='hidden' id='correoD" . $id . "' value=" . $correo2 . " autocomplete='on'>
                      <input type='hidden' id='direccionD" . $id . "' value=" . $direccion2 . " autocomplete='on'>
                      <input type='hidden' id='telefonoD" . $id . "' value=" . $telefono2 . " autocomplete='on'> 
  
                      <button type='button' style='background-color:  #08a6df;color: white;  height:60px ; width:116px;font-size:25px' onclick='modificar(" . $id . ")'> Modificar </button> </td>"; ?>
                      </form>
          <?php
                      echo "</tr>";
                  }
              }else{
                echo("no va gines cambniadlo");
              }
            }
              echo "</table>";
  
          
          }

}
    require_once("vista/datos_vista.php");
} else {
    require_once("vista/base.php");
    ?>
    <h1 style="color: white; text-align: center;" id="testabout">
      INICIO DE SESION:
    </h1>
  </div>

    <div>
        <form action="" method="post">
            <label for="usuario">Usuario:</label>
                <input type="text" name="usuario">
            <label for="contrasena">Contraseña:</label>
                   <input type="password" name="contrasenia">
            <input type="submit" name="enviar" value="enviar"> 
        </form> 
    </div>















<?php
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
