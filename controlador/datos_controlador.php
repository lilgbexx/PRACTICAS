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

if( isset($_POST["usuario"]) && isset($_POST["nombre1"]) && isset($_POST["apellido1"]) && isset($_POST["telefono1"]) && isset($_POST["correo1"]) &&  isset($_POST["direccion1"]) ){ 


    echo "<div class='formulario'>
    
    <form  action='' method='post'>
    <table>
     <tr><th colspan='2'> Modficar Usuario</th></tr>
     
     <tr><td>USUARIO:</td><td><input name='usuario'  type='text' value =".$_POST['usuario']." ><br></td></tr>
     <tr><td>NOMBRE:</td><td><input name='nombre'  type='text' value =".$_POST['nombre1']." ><br></td></tr>
     <tr><td>APELLIDOS:</td><td><input name='apellido'  type='text' value =".$_POST['apellido1']." ><br></td></tr>
     <tr><td>TELEFONO:</td><td><input name='telefono'  type='text' value =".$_POST['telefono1']." ><br></td></tr>
     <tr><td>CORREO:</td><td><input name='correo'  type='text' value =".$_POST['correo1']." ><br></td></tr>
     <tr><td>DIRECCION:</td><td><input name='direccion'  type='text' value =".$_POST['direccion1']." ><br></td></tr>
     
     
     
   
     <tr>
     <td><input name='ModificarUser' type='submit' id='ModificarUser' value='Modificar'></td>
     <td><input type='button' id='insertUser' value='Cancelar' onclick='cancelar()'></td>
     </tr>
   
    </table>
   </form>
   </div>";
}else{

    require_once ("modelo/datos_modelo.php");
    $dato = new datos_modelo();
    

if (isset($_POST['enviar'])) {
    if (isset($_POST['usuario']) && isset($_POST['contrasenia'])) {
        $usuario = $_POST['usuario'];
        $contrasenia = $_POST['contrasenia'];
    
        if($dato->login($usuario, $contrasenia)) {
    
            $_SESSION['usuario'] = $usuario;
        }else {
            $error = "Usuario o contraseña incorrecta";
        }
    }

    
   


    

}elseif (isset($_POST["insertar"])){
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
        
    
    
}elseif(isset($_POST['borrar'])) {
    $usuario = $_POST['usuario'];
    $dato->borrar($usuario);
    session_destroy();
    header('Location:inicio.php');
    exit();
        

}elseif (isset($_POST['ModificarUser'])) {
    if(!empty($_POST['usuario']) && !empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['telefono']) && !empty($_POST['correo']) && !empty($_POST['direccion'] )){
        $usuario = $_POST['usuario'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellidos'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $direccion = $_POST['direccion'];
        $dato=modificar($usuario,$nombre,$apellido,$telefono,$correo,$direccion);

    }else{
        $error = "Rellene todos los campos";
    }

}
    $array_datos = $dato->get_datos();
    require_once ("vista/datos_vista.php");
   

   
}

?>

