<?php
ob_start();
$ida=0;
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"] == "admin") {
        require_once("vista/base3.php");
       
        if (isset($array_productos)) {

          ?>
      
              <table id="tabla">
                  
                          <h1 id="loginh1">LOS NFTs DISPONIBLES EN EL CATALOGO</h1>
                      
                  
                  <tr>
                      <th id="trtitulos">ID</th>
                      <th id="trtitulos">NOMBRE</th>
                      <th id="trtitulos">TIPO</th>
                      <th id="trtitulos">TALLA</th>
                      <th id="trtitulos">PRECIO</th>
                      <th id="trtitulos">RUTA</th>
                      <th id="trtitulos">BORRAR</th>
                      <th id="trtitulos">MODIFICAR</th>
                  </tr>
                  <?php
                  foreach ($array_productos as $registro) {
                      $contador = 1;
                      if (is_array($registro)) {
                          echo "<tr>";
                          foreach ($registro as $value2) {
                            switch ($contador) {
                                  case '1':
                                      $id_producto = $value2;
                                      $ida++;
                                      break;
                                  case '2':
                                      $nombre2 = $value2;
                                      break;
                                  case '3':
                                      $tipo2 = $value2;
                                      break;
                                  case '4':
                                      $talla2 = $value2;
                                      break;
                                  case '5':
                                      $precio2 = $value2;
                                      break;
                                  case '6':
                                      $ruta2 = $value2;
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

                                  <input type="hidden" name="id" value="<?php echo $registro["id_producto"] ?>">
                                  <td><input type="submit" name="borrar" value="Borrar" id="botonborrar"></td>
                          
                          <?php
                          echo "<td>
                          <input type='hidden' id='id_productoD" . $ida . "' value=" . $id_producto . " autocomplete='on'>
                          <input type='hidden' id='nombreD" . $ida . "' value=" . $nombre2 . " autocomplete='on'>
                          <input type='hidden' id='tipoD" . $ida . "' value=" . $tipo2 . " autocomplete='on'>
                          <input type='hidden' id='tallaD" . $ida . "' value=" . $talla2 . " autocomplete='on'>
                          <input type='hidden' id='precioD" . $ida . "' value=" . $precio2 . " autocomplete='on'>
                          <input type='hidden' id='rutaD" . $ida . "' value=" . $ruta2 . " autocomplete='on'>
                           <button type='button' style='background-color: #c0cd00;color: black; font-weight: bold; height:60px ; width:175px;font-size:30px' onclick='modificar1(" . $ida . ")'> Modificar </button> 
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
              <div id="containera" ></div>

              <div id="insertForma" class="insertara">
                  
                      <form action="" method="post" enctype="multipart/form-data">
                      
                      <h1 class="h1form">'AÑADIR NUEVA ROPA AL STOCK'</h1>
                      
                      
                      <label class="labelmodi" for="">NOMBRE:</label>       
                      <input class="inputformulario" type="text" name="nombre">
                      <label class="labelmodi" for="">TIPO:</label>
                      <input class="inputformulario" type="text" name="tipo">
                      <label class="labelmodi" for="">TALLA:</label>
                      <input class="inputformulario" type="text" name="talla">
                      <label class="labelmodi" for="">PRECIO:</label>
                      <input class="inputformulario" type="text" name="precio">
                    
                      <input class="inputformulario" type="file" name="ruta"><br>
                      <input class="botonmodi" type="submit" name="insertar" value="Insertar">
                      
                      </form>
              </div>
          <?php
  
    } else {
        require_once("vista/base2.php");
        foreach ($array_productos as $registro) {
          ?>
  
  <h1 id="textomedio">'$GS_COMPANY'</h1>
          <div>
            <div class="recomendaciones">
          
              <div class="card">
                <img src="<?php echo $registro["ruta"]; ?>"   >
                <div class="containerr">
                  <h4><?php echo $registro["nombre"]; ?></h4> 
                  <h4><?php echo $registro["precio"];echo"$"; ?></h4>
                  <input id="botonborrar" type="submit" name="" value="COMPRAR">
                </div>
              </div>
              <div class="card">
                <img src="<?php echo $registro["ruta"]; ?>"   >
                <div class="containerr">
                  <h4><?php echo $registro["nombre"]; ?></h4> 
                  <h4><?php echo $registro["precio"];echo"$"; ?></h4>
                  <input id="botonborrar" type="submit" name="" value="COMPRAR">
                </div>
              </div>
              <div class="card">
                <img src="<?php echo $registro["ruta"]; ?>"   >
                <div class="containerr">
                  <h4><?php echo $registro["nombre"]; ?></h4> 
                  <h4><?php echo $registro["precio"];echo"$"; ?></h4>
                  <input id="botonborrar" type="submit" name="" value="COMPRAR">
                </div>
              </div>
              
           
          
            </div>
          </div>
              
          <?php
      }
  
    }
    
} else {
    require_once("vista/base.php");
    foreach ($array_productos as $registro) {
        ?>


  <h1 id="textomedio">'$GS_COMPANY'</h1>

        <div>

           <div class="recomendaciones">
        
            <div class="card">
              <img src="<?php echo $registro["ruta"]; ?>"   >
              <div class="containerr">
                <h4><?php echo $registro["nombre"]; ?></h4> 
                <h4><?php echo $registro["precio"];echo"$"; ?></h4>
                
              </div>
            </div>
            <div class="card">
              <img src="<?php echo $registro["ruta"]; ?>"   >
              <div class="containerr">
                <h4><?php echo $registro["nombre"]; ?></h4> 
                <h4><?php echo $registro["precio"];echo"$"; ?></h4>
                
              </div>
            </div>

              <div class="card">
              <img src="<?php echo $registro["ruta"]; ?>"   >
              <div class="containerr">
                <h4><?php echo $registro["nombre"]; ?></h4> 
                <h4><?php echo $registro["precio"]; echo"$"; ?></h4>
                
               </div>
              </div>
            
        
           </div>

        </div>
            
        <?php
    }
    


    
}

?>

<div id="footer">
       
    <img src="images/logo.png" alt="Tu foto" id="imagenelogo">
  
    <div id="footer-right">
      <h1>DERECHOS RESERVADOS © 2023 </h1>
    </div>
  
     <img src="images/logo.png" alt="Tu foto" id="imagenelogo">

</div>