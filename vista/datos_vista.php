<?php
ob_start();
$id=0;
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"] == "admin") {
      require_once("vista/base3.php");
        if (isset($array_datos)) {
          ?>    
              <table id="tabla" >                 
                  <h1 id="loginh1">MENU DE ADMINISTRACION DE CUENTAS</h1>                 
                  <tr >
                      <th id="trtitulos">USUARIO</th>
                      <th id="trtitulos">NOMBRE</th>  
                      <th id="trtitulos">APELLIDOS</th>               
                      <th id="trtitulos">CORREO</th>                    
                      <th id="trtitulos">DIRECCION</th>
                      <th id="trtitulos">TELEFONO</th>
                      <th id="trtitulos">BORRAR</th>            
                      <th id="trtitulos">MODIFICAR</th>
                      
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
                          <form action="" method="post" id="formulario">
                          
                                  
                          <input type="hidden" name="usuario" value="<?php echo $registro["usuario"] ?>"> 
                                <td><input id="botonborrar" type="submit" name="borrar" value="Borrar"></td>               
                          
                          <?php
                          echo "<td >
                           <input type='hidden' id='usuarioD" . $id . "' value=" . $usuario . " autocomplete='on'> 
                           <input type='hidden' id='nombreD" . $id . "' value=" . $nombre2 . " autocomplete='on'>
                           <input type='hidden' id='apellidoD" . $id . "' value=" . $apellidos2 . " autocomplete='on'>
                           <input type='hidden' id='correoD" . $id . "' value=" . $correo2 . " autocomplete='on'>
                           <input type='hidden' id='direccionD" . $id . "' value=" . $direccion2 . " autocomplete='on'>
                           <input type='hidden' id='telefonoD" . $id . "' value=" . $telefono2 . " autocomplete='on'>
                           <button type='button' style='background-color: #c0cd00;color: black; font-weight: bold; height:60px ; width:175px;font-size:30px' onclick='modificar(" . $id . ")'> Modificar </button>
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
              <div id="container" ></div>
              <div id="insertForm" class="insertar">
              <form action="" method="post">
                  
                    <h1 class="h1form">'AÑADIR UN NUEVO USUARIO NUEVO'</h1>

                    <label class="labelmodi" for="">USUARIO:</label>
                    <input class="inputformulario" type="text" name="usuario"><br>
                    
                    <label class="labelmodi" for="">CONTRASEÑA:</label>
                    <input class="inputformulario" type="password" name="contrasenia"><br>
                      
                    <label class="labelmodi" for="">NOMBRE:</label>
                    <input class="inputformulario" type="text" name="nombre"><br>
                        
                    <label class="labelmodi" for="">APELLIDOS:</label>
                    <input class="inputformulario" type="text" name="apellidos"><br>
                          
                    <label class="labelmodi" for="">CORREO:</label>
                    <input class="inputformulario" type="text" name="correo"><br>
                            
                    <label class="labelmodi" for="">DIRECCION:</label>
                    <input class="inputformulario" type="text" name="direccion"><br>
                              
                    <label class="labelmodi" for="">TELEFONO:</label>
                    <input class="inputformulario" type="text" name="telefono"><br>

                  <input class="botonmodi" type="submit" name="insertar" value="Insertar">
                  

              </form>
              </div>
          <?php  
          echo "<p>$error</p>";        
    } else {
      require_once('vista/base2.php');
      if (isset($array_datos)) {
        ?>    
            <table id="tabla">                 
            <h1 id="loginh1">PANEL DE CONTROL DE CUENTA</h1>                 
                  <tr >
                      <th id="trtitulos">USUARIO</th>
                      <th id="trtitulos">NOMBRE</th>  
                      <th id="trtitulos">APELLIDOS</th>               
                      <th id="trtitulos">CORREO</th>                    
                      <th id="trtitulos">DIRECCION</th>
                      <th id="trtitulos">TELEFONO</th>
                      <th id="trtitulos">BORRAR</th>            
                      <th id="trtitulos">MODIFICAR</th>
                      
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
                          <form action="" method="post" id="formulario">
                          
                                  
                          <input type="hidden" name="usuario" value="<?php echo $registro["usuario"] ?>"> 
                                <td><input id="botonborrar" type="submit" name="borrar" value="Borrar"></td>               
                          
                          <?php
                          echo "<td >
                           <input type='hidden' id='usuarioD" . $id . "' value=" . $usuario . " autocomplete='on'> 
                           <input type='hidden' id='nombreD" . $id . "' value=" . $nombre2 . " autocomplete='on'>
                           <input type='hidden' id='apellidoD" . $id . "' value=" . $apellidos2 . " autocomplete='on'>
                           <input type='hidden' id='correoD" . $id . "' value=" . $correo2 . " autocomplete='on'>
                           <input type='hidden' id='direccionD" . $id . "' value=" . $direccion2 . " autocomplete='on'>
                           <input type='hidden' id='telefonoD" . $id . "' value=" . $telefono2 . " autocomplete='on'>
                           <button type='button' style='background-color: #c0cd00;color: black; font-weight: bold; height:60px ; width:175px;font-size:30px' onclick='modificar(" . $id . ")'> Modificar </button>
                                </td>";
                             ?>
                           </form>
              <?php
                          echo "</tr>";
                      }
                  }
                }
                  echo "</table>";
              }
              ?>
              <div id="container" ></div>
            <div id="insertForm" class="nuevo">
<?php
          
      }
   
} else {
    require_once("vista/base.php");
    ?>
    <div><h1 id="loginh1">"INICIAR SESION"</h1></div>
    <div id="login">
        <form action="" method="post">
            <label id="loginlabel" for="usuario">USUARIO</label>

                <input id="logininput" type="text" name="usuario">

            <label id="loginlabel"  for="contrasena">CONTRASEÑA</label>

                   <input  id="logininput" type="password" name="contrasenia">

                  
            <input id="loginenviar" type="submit" name="enviar" value="ACCEDER"> 
        </form> 
    </div>
   
 
    <div>
      <h1 id="loginh1" >COLECION DE $GS COMPANY$</h1>
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

<br>
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
       
    <img src="images/logo.png" alt="Tu foto" id="imagenelogo">
  
    <div id="footer-right">
      <h1>DERECHOS RESERVADOS © 2023 </h1>
    </div>
  
     <img src="images/logo.png" alt="Tu foto" id="imagenelogo">

</div>














