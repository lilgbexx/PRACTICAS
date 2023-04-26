<?php
class Datos_modelo{
#Conexion BBDD
    private  $db; 


#Registro de BBDD
    private $datos; 



//FUNCION CONTRUCTOR
    public function __construct(){
        require_once("Modelo/conectar.php");
        $this->db = Conectar::conexion();
        $this->datos = array();
}


//FUNCION PARA OBTENER LOS DATOS    
    public function get_datos(){
        $sql="SELECT * FROM datos";
        $consulta = $this->db->query($sql);
        while($registro=$consulta->fetch_assoc()){
            $this->datos[]=$registro;
        }
        return $this->datos;
    }


//HACES EL LOGIN EN LA BBDD
public function login($usuario,$contrasenia){
    $sql = "SELECT * FROM usuarios WHERE usuario = '" . $usuario . "' and contrasenia = '" . $contrasenia . "' "; 
    if ($consulta = $this->db->query($sql)) { 
        if (mysqli_num_rows($consulta) > 0) { 
            $row = $consulta->fetch_array(MYSQLI_ASSOC);  
            $_SESSION['usuario'] = $row['usuario']; 
            return true;
        } else {          
            return false;
        }
    } else {
        echo 'Fallo en la consulta de la BBDD:' . mysqli_error($this->db);
    }
}


public function modificar2($usuario,$contrasenia,$nombre,$apellidos,$correo,$direccion,$telefono ){
    #Modificacion en la BBDD
    $sql = "UPDATE usuarios SET usuario='" . $usuario . "' WHERE usuario='" . $usuario . "' and contrasenia='" . $contrasenia . "'";
    if (!$consulta = $this->db->query($sql)) {
        echo "Error al modificar los valores en la primera tabla,vuelvelo a intentar/";
    }
    $sql = "UPDATE datos Set usuario='$usuario', nombre ='$nombre', apellidos = '$apellidos' , correo = '$correo' , direccion='$direccion' ,telefono='$telefono' where usuario='$usuario'";
    if (!$consulta = $this->db->query($sql)) {
        echo "Error al modificar los valores en la segunda tabla,vuelvelo a intentar";
    }
}
public function modificar($usuario,$nombre,$apellidos,$correo,$direccion,$telefono){
    $sql= "UPDATE datos Set nombre ='$nombre', apellidos = '$apellidos' , correo = '$correo' , direccion='$direccion' ,telefono='$telefono' where usuario='$usuario'";
    if(!$consulta = $this->db->query($sql)){
        echo "Error modificar valores en la segunda tabla";
    }
    else{
        
    }
}

public static function obtenerUsuario($id){  
    $sql="SELECT * FROM datos WHERE usuario=$id";

}

//Borras el usuario de la BBDD    
public function borrar($usuario){
    #Borrado en la BBDD
    $sql = "DELETE FROM usuarios WHERE usuario='" . $usuario . "'";
    if (!$consulta = $this->db->query($sql)) {
        echo "Error al borrar los valores en la primera tabla,vuelvelo a intentar/";
    }
    $sql = "DELETE FROM datos WHERE usuario='" . $usuario . "'";
    if (!$consulta = $this->db->query($sql)) {
        echo "Error al borrar los valores en la segunda tabla,vuelvelo a intentar";
    }else{
        
    }
}
}




?>

