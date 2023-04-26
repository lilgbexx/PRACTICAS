<?php
// Función para cargar la vista de registro
session_start();
function home() {
    require_once("vista/registro_vista.php");
}

function cerrar(){
    session_destroy();
    header('Location:inicio.php');
    exit();
}
$error = "";
require_once("modelo/registro_modelo.php");
$datos = new registro_modelo();

    if (isset($_POST['insertar'])) {
       
        
        if (!empty($_POST['usuario']) && !empty($_POST['contrasenia']) && !empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['telefono']) && !empty($_POST['correo']) && !empty($_POST['direccion'])) {
           
            $usuario = $_POST['usuario'];
            $contrasenia = $_POST['contrasenia'];
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];
            $direccion = $_POST['direccion'];
            
          
            $datos->insertar($usuario, $contrasenia, $nombre, $apellidos, $telefono, $correo, $direccion);
        } else {
           
            echo "No has rellenado todos los campos";
        }
        

    }
    elseif(isset($_POST['cerrar'])){
        session_destroy();
        header('Location:inicio.php');
        exit();
       
    }
   

   $array_datos = $datos->get_datos();

    require_once("vista/registro_vista.php");
    
?>





