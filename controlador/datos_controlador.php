<?php

session_start();
//Funcion home para guardar la Vista

require_once("modelo/datos_modelo.php");
$dato = new Datos_modelo();

function home(){
    $dato = new Datos_modelo();
    $array_datos = $dato->get_datos();
    if (!isset($_SESSION["nombre"])) {
        require_once("vista/base.php");
        require_once("vista/datos_vista.php");
    } else {
        require_once("vista/base2.php");
        require_once("vista/home_vista.php");
    }
}


//Funcion para ver los datos
function ver_datos(){
    $dato = new Datos_modelo();
    $array_datos = $dato->get_datos();
    require_once("vista/base2.php");
    require_once("vista/datos_vista.php");
}

//Funcion cerrar la que nos llegue al INDEX
function cerrar(){
    session_destroy();
    header('Location:inicio.php');
    exit();
}



if (isset($_POST['enviarLog'])) {
    if (isset($_POST['nombre']) && isset($_POST['contrasenia'])) {

        $usuario = $_POST['nombre'];
        $contra = $_POST['contrsenia'];

        if ($dato->login($usuario, $contra)) {

            $_SESSION['nombre'] = $usuario;
            $array_datos = $dato->get_datos();
        } else {
            $error = "Usuario o contraseña incorrecta";
        }
    } else {
        $error = "Formulario sin rellenar";
    }
}







?>