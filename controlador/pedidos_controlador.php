<?php

session_start();
require_once("modelo/pedidos_modelo.php");

function pedidos(){
    require_once("vista/pedidos_vista.php");
}

$pedidos = new pedidos_modelo();
$array_pedidos = $pedidos->get_pedidos();

require_once("vista/pedidos_vista.php");


if(isset($_POST['insertar'])){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $pedidos->insertar($id,$nombre,$precio,$cantidad);
    header('Location:pedidos_controlador.php');

}elseif(isset($_POST['comprar'])){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $pedidos->comprar($id,$nombre,$precio,$cantidad);
    header('Location:pedidos_controlador.php');

}elseif(isset($_POST['borrar'])){
    $id = $_POST['id'];
    $pedidos->borrar($id);
    header('Location:pedidos_controlador.php');

}elseif(isset($_POST['modificar'])){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $pedidos->modificar($id,$nombre,$precio,$cantidad);
    header('Location:pedidos_controlador.php');
}
