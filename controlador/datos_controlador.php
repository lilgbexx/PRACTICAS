<?php

session_start();

function home() {
    require_once("vista/datos_vista.php");
}

function cerrar(){
    session_destroy();
    header('Location:inicio.php');
    exit();
}



$error = ""; 
if (isset($_SESSION["usuario"])) {

    if ($_SESSION["usuario"] == "admin") {
        //admin
    } else {
        //cliente
    }
} else {

    require_once("Modelo/datos_modelo.php");
    $dato = new Datos_modelo();

    if(isset($_POST['enviar'])) {  
    if (isset($_POST['usaurio']) && isset($_POST['contrasenia'])) {
        $usuario = $_POST['usuario'];
        $contrasenia = $_POST['contrasenia'];

        if ($dato->login($usuario, $contrasenia)) {

            $_SESSION['usuario'] = $usuario;
        } else {
            $error = "Usuario o contraseña incorrecta";
        }
    }

    }

if (isset($_POST['enviar'])) {
    if (isset($_POST['usuario']) && isset($_POST['usuario'])) {
        $usuario = $_POST['usuario'];
        $contrasenia = $_POST['contrasenia'];
    
        if ($dato->login($usuario, $contrasenia)) {
    
            $_SESSION['usuario'] = $usuario;
        } else {
            $error = "Usuario o contraseña incorrecta";
        }
    }
    }

}
    
    









    










?>