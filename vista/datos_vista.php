
<?php

ob_start();
$id=0;
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"] == "admin") {
      require_once("vista/base3.php");
        if (isset($array_datos)) {

          ?>
      
              <table id="customers">
                  <tr>
                      <th colspan="7">
                          <h1 align="center">MENU DE ADMINISTRACION DE CUENTAS</h1>
                      </th>
                  </tr>
                  <tr>
                      <th>USUARIO</th>
                      <th>NOMBRE</th>
                      <th>APELLIDOS</th>
                      <th>CORREO</th>
                      <th>DIRECCION</th>
                      <th>TELEFONO</th>
                      <th>BORRAR</th>
                      <th>MODIFICAR</th>
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
                                  <br>
                                  <td><input type="submit" name="borrar" value="Borrar"></td>
                                  
                                  <td></td>
                          </td>



                          <?php
                          echo "<td> 
                          <input type='hidden' id='usuarioD" . $id . "' value=" . $usuario . " autocomplete='on'>
                          <input type='hidden' id='nombreD" . $id . "' value=" . $nombre2 . " autocomplete='on'>
                          <input type='hidden' id='apellidoD" . $id . "' value=" . $apellidos2 . " autocomplete='on'>
                          <input type='hidden' id='correoD" . $id . "' value=" . $correo2 . " autocomplete='on'>
                          <input type='hidden' id='direccionD" . $id . "' value=" . $direccion2 . " autocomplete='on'>
                          <input type='hidden' id='telefonoD" . $id . "' value=" . $telefono2 . " autocomplete='on'> 
                          <button type='button' style='background-color:  #08a6df;color: white;  height:60px ; width:116px;font-size:25px' onclick='modificar(" . $id . ")'> Modificar </button> 
                          </td>";
                           ?>
                           </form>
              <?php
                          echo "</tr>";
                      }
                  }
      
                  echo "</table>";
              }
              ?>
              <div id="container" class="editar">
              </div>
              <div id="insertForm" class="nuevo">
                  
                      <form action="" method="post">
                          <tr>
                          </tr>
                          <tr>
                              <td colspan="2" align="center">
                                  <h1 >AÑADIR UN NUEVO USUARIO</h1>
                              </td>
                          </tr>
                          <tr>
                        <td>USUARIO:</td>
                        <td><input type="text" name="usuario"></td>
                    </tr>
                    <tr>
                        <td>CONTRASENIA:</td>
                        <td><input type="text" name="contrasenia"></td>
                    </tr>
                    <tr>
                        <td>NOMBRE:</td>
                        <td><input type="text" name="nombre"></td>
                    </tr>
                    <tr>
                        <td>APELLIDOS:</td>
                        <td><input type="text" name="apellidos"></td>
                    </tr>
                    <tr>
                        <td>CORREO:</td>
                        <td><input type="text" name="correo"></td>
                    </tr>
                    <tr>
                        <td>TELEFONO:</td>
                        <td><input type="text" name="telefono"></td>
                    </tr>
                    
                    <tr>
                        <td>DIRECCION:</td>
                        <td><input type="text" name="direccion"></td>
                    </tr>
                    <tr>
                        <td  ><input type="submit" name="insertar" value="insertar"></td>
                    </tr>
                          
      
                      </form>
              </div>
          <?php
              
             
    } else {
      require_once('vista/base2.php');
        
      }
    ?>
      <div id="container"></div>

      <?php
} else {
    require_once("vista/base.php");
    ?>
    <h1 style=" text-align: center; " id="testabout">
      "INICIAR DE SESION"
    </h1>
  </div>

    <div>
        <form action="" method="post">
            <label for="usuario">Usuario</label>
                <input class="input" type="text" name="usuario">
            <label for="contrasena">Contraseña</label>
                   <input type="password" name="contrasenia">
                   <br>
            <input type="submit" name="enviar" value="enviar"> 
        </form> 
    </div>


<?php
}


?>



<div class="recomendaciones">

<div class="card">
    <img src="images/logo.png" alt="Avatar" style="width:100%">
    <div class="containerr">
      <h3><b>PERICO</b></h3>
      <h4>A PERICO LE GUSTA EL ALPISTE</h4>
    </div>
  </div>
  <div class="card">
    <img src="images/logo.png" alt="Avatar" style="width:100%">
    <div class="containerr">
      <h3><b>PERICO</b></h3>
      <h4>A PERICO LE GUSTA EL ALPISTE</h4>
    </div>
  </div>
  <div class="card">
    <img src="images/logo.png" alt="Avatar" style="width:100%">
    <div class="containerr">
      <h3><b>PERICO</b></h3>
      <h4>A PERICO LE GUSTA EL ALPISTE</h4>
    </div>
  </div>
  
  <div class="card">
    <img src="images/logo.png" alt="Avatar" style="width:100%">
    <div class="containerr">
      <h3><b>PERICO</b></h3>
      <h4>A PERICO LE GUSTA EL ALPISTE</h4>
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
















