<?php
// Función para cargar la vista de registro

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
$dato = new registro_modelo();

    //introducir usuario y contrasenia en la tabla usuarios y al mismo tiempo la tabla datos introducir usuario, nombre, apellidos, correo, direccion y telefono
    if(isset($_POST["insertar"])){
        $usuario = $_POST["usuario"];
        $contrasenia = $_POST["contrasenia"];
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $correo = $_POST["correo"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $dato->insertar($usuario,$contrasenia,$nombre,$apellidos,$correo,$direccion,$telefono);
        header('Location:inicio.php');
        exit();
    }
   
   

 
    
?>





