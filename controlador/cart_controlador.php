<?php

session_start();
require_once("modelo/cart_modelo.php");

function home(){
    $datos = array();
    $datos["carrito"] = getCarrito();
    require_once("Vista/cart_vista.php");
}





?>

