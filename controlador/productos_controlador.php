<?php

session_start();


function home(){
    require_once("vista/productos_vista.php");
}


function cerrar(){
    session_destroy();
    header('Location:inicio.php');
    exit();

}

$error = "";

if(isset($_POST["id_producto"]) && isset($_POST["nombre1"]) && isset($_POST["tipo1"]) && isset($_POST["talla1"]) && isset($_POST["precio1"]) && isset($_POST["ruta1"])){

    echo "<div class='formulario'>

    <form  action='' method='post' enctype='multipart/form-data'>
    <table'>

    <h1 class='h1form'>'MODIFICA TUS PRODUCTOS'</h1>

     <tr><td>
        <label class='labelmodi'>Id:</label>
     <input class='inputformulario' name='id_producto'  type='text' value =".$_POST['id_producto']." ><br>
     </td></tr>

     <tr><td>
        <label class='labelmodi'>Nombre:</label>
     <input class='inputformulario' name='nombre'  type='text' value =".$_POST['nombre1']." ><br>
     </td></tr>

     <tr><td>
        <label class='labelmodi'>Tipo:</label>
     <input class='inputformulario'  name='tipo'  type='text' value =".$_POST['tipo1']." ><br>
     </td></tr>

     <tr><td>
        <label class='labelmodi'>Talla:</label>
     <input class='inputformulario' name='talla'  type='text' value =".$_POST['talla1']." ><br>
     </td></tr>

     <tr><td>
        <label class='labelmodi'>Precio:</label>
     <input class='inputformulario' name='precio'  type='text' value =".$_POST['precio1']." ><br>
     </td></tr>

     <tr><td>
        <label class='labelmodi'>Ruta:(Obligatorio)</label>
     <input class='inputformulario' name='ruta'  type='text' value =".$_POST['ruta1']." ><br>
    
     </td></tr>

     <tr><td>
     <input class='botonmodi' name='ModificarUsera' type='submit' id='ModificarUsera' value='Modificar'>
     </td></tr>

     <tr><td>
     <input class='botonmodi' type='button'  value='Cancelar' onclick='cancelar1()'>
     </td></tr>

     </table>
     </form>
     </div>";
    

}else{    
    require_once("modelo/productos_modelo.php");
    $productos = new productos_modelo();

    $destino = "catalogo/";

if(isset($_POST['insertar'])){
    if(file_exists($destino) || @mkdir($destino)){
        $origen = $_FILES["ruta"]["tmp_name"];

        $destino_fichero = $destino . $_FILES["ruta"]["name"];

        $nombre = $_POST['nombre'];
        $tipo = $_POST['tipo'];
        $talla = $_POST['talla'];
        $precio = $_POST['precio'];
        
        if(@move_uploaded_file($origen, $destino_fichero)){
            echo "La imagen " . $_FILES["ruta"]["name"] . " se ha añadido correctamente";
            $productos->insertarProducto($nombre,$tipo,$talla,$precio,$destino_fichero);
            header('Location:inicio.php');
        }
    }

        

    
}elseif(isset($_POST['borrar'])){
    $id = $_POST['id'];
    $productos->borrar($id);
    header('Location:inicio.php');

}elseif(isset($_POST['ModificarUsera'])){
    if( !empty($_POST['id_producto']) && !empty($_POST['nombre']) && !empty($_POST['tipo']) && !empty($_POST['talla']) && !empty($_POST['precio']) && !empty($_POST['ruta'])){
        $id = $_POST['id_producto'];
        $nombre = $_POST['nombre'];
        $tipo = $_POST['tipo'];
        $talla = $_POST['talla'];
        $precio = $_POST['precio'];
        $ruta = $_POST['ruta'];
        $productos->modificar($id,$nombre,$tipo,$talla,$precio,$ruta);
        
    
    }else{
        
    }
}elseif(isset($_POST['comprar'])){
    if( !empty($_POST['id_producto']) && !empty($_POST['nombre']) && !empty($_POST['tipo']) && !empty($_POST['talla']) && !empty($_POST['precio']) && !empty($_POST['ruta'])){
        $id = $_POST['id_producto'];
        $nombre = $_POST['nombre'];
        $tipo = $_POST['tipo'];
        $talla = $_POST['talla'];
        $precio = $_POST['precio'];
        $ruta = $_POST['ruta'];
        $productos->comprar($id,$nombre,$tipo,$talla,$precio,$ruta);
        
    
    }else{
        
    }

}

$array_productos = $productos->get_productos();
require_once("vista/productos_vista.php");

}

?>
