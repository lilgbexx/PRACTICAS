<?php
require_once("Vista/base.php");
?>


<?php
if(!isset($_SECCION["usuario"])){
?>


<div>
        <h1>MI CUENTA DE $GSCOMPANY$</h1>
</div>
<form action="" method="post">
                <tr>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                </tr>
                <tr>
                    <td><input type="text" name="nombre"></td>
                    <td><input type="contrasenia" name="contrasenia"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="enviar" value="Enviar"></td>
                </tr>

            </form>
  


 <?php
}else{

  echo("Bienvenido ".$_SECCION["nombre"]) ;
  
   
}
?>