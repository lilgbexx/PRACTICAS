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


    
        if(isset($_POST["usuario"]) && isset($_POST["nombre1"]) &&  isset($_POST["apellidos1"]) &&  isset($_POST["correo1"]) &&  isset($_POST["direccion1"]) &&  isset($_POST["telefono1"])){ 
            echo "<div class='formulario'>
    
             <form  action='' method='post'>
             <table>
              <tr><th colspan='2'> Modficar Usuario</th></tr>
              <tr><td>USUARIO:</td><td><input name='usuario'  type='text'value =".$_POST['usuario']." ><br></td></tr>
              <tr><td>NOMBRE:</td><td><input name='nombre'  type='text'value =".$_POST['nombre1']." ><br></td></tr>
              <tr><td>APELLIDOS:</td><td><input name='apellidos'  type='text'value =".$_POST['apellidos1']." ><br></td></tr>
              <tr><td>CORREO:</td><td><input name='correo'  type='text'value =".$_POST['correo1']." ><br></td></tr>
              <tr><td>DIRECCION:</td><td><input name='direccion'  type='text'value =".$_POST['direccion1']." ><br></td></tr>
              <tr><td>TELEFONO:</td><td><input name='telefono'  type='text'value =".$_POST['telefono1']." ><br></td></tr>
            
              <tr>
              <td><input name='Modificar' type='submit' id='Modificar' value='Modificar'></td>
              <td><input type='button' id='insertUser' value='Cancelar' onclick='cancelar()'></td>
              </tr>
            
             </table>
            </form>
            </div>";
        } else{

            
       
    

    require_once("modelo/datos_modelo.php");
    $datos = new Datos_modelo();

    if (isset($_POST['enviar'])) {
        if (isset($_POST['usuario']) && isset($_POST['contrasenia'])) {
            $usuario = $_POST['usuario'];
            $contrasenia = $_POST['contrasenia'];
    
            if ($datos->login($usuario, $contrasenia)) {
    
                $_SESSION['usuario'] = $usuario;
            } else {
                $error = "Usuario o contraseña incorrecta";
            }
        }


   
    }elseif(isset($_POST['borrar'])) {
        $usuario = $_POST['usuario'];
        $datos->borrar($usuario);
        session_destroy();
        header('Location:inicio.php');
        exit();


    
    //MODIFICAR
    } elseif (isset($_POST['Modificar'])) {
        if (!empty($_POST['usuario']) &&  !empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['correo']) && !empty($_POST['direccion']) && !empty($_POST['telefono']) ) {
            $usuario = $_POST['usuario'];
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $correo = $_POST['correo'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];
            
            $datos->modificar($usuario,$nombre,$apellidos,$correo,$direccion,$telefono);
        } else {
            
        }
    }

    $array_datos = $datos->get_datos();
    require_once("vista/datos_vista.php");
}

?>
