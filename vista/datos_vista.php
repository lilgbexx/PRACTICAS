
<?php

if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"] == "admin") {
        require_once("vista/base3.php");
        ?>
        <h1>ERES EL ADMINISTRADOR</h1>
        <h1>PANEL DE CONTROL DONDE PUEDES INSERTAR, MODIFICAR Y BORRAR TODOS USUARIOS</h1>

        <?php
    } else {
        require_once("vista/base2.php");
        ?>   
        <h1>ERES EL CLIENTE</h1>
        <h1>PANEL DE CONTROL MODIFICAR SUS DATOS</h1>
<?php   
    }
    
   
} else {
    require_once("vista/base.php");
    ?>
   

   <table id="customers">
            <form action="" method="post">
                <tr>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                </tr>
                <tr>
                    <td><input type="text" name="usuario"></td>
                    <td><input type="password" name="contrasenia"></td>
                </tr>
                <tr>
                    <td ><input type="submit" name="enviar" value="enviar"></td>
                </tr>

            </form>
        </table>


    <?php
}

?>