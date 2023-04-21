<?php

session_start();
//Funcion home para guardar la Vista
function home()
{
    require_once("Vista/datos_vista.php");
}
//Funcion cerrar la que nos llegue al INDEX
function cerrar()
{
    session_destroy();
    header('Location:inicio.php');
    exit();
}

$error = "";

