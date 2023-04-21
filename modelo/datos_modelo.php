<?php
class Datos_modelo{
#Conexion BBDD
    private $db; 


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
public function login($user,$contra){
    $sql = "SELECT * FROM usuarios WHERE usuario = '" . $user . "' and contrasenia = '" . $contra . "' "; 
    if ($consulta = $this->db->query($sql)) { 
        if (mysqli_num_rows($consulta) > 0) { 
            $row = $consulta->fetch_array(MYSQLI_ASSOC);  
            $_SESSION['nombre'] = $row['usuario']; 
            return true;
        } else {          
            return false;
        }
    } else {
        echo 'Fallo en la consulta de la BBDD:' . mysqli_error($this->db);
    }
}


//INSERTAR EL USUARIO EN LA BBDD
    public function insertar($usuario,$contrasenia,$nombre,$apellidos,$coreo,$direccion,$telefono){
        $sql = "INSERT into usuarios VALUES('".$usuario."','".$contrasenia."')";
        if(!$consulta = $this->db->query($sql)){  
        }
        else{
            $sql = "INSERT into datos VALUES ('".$usuario."','".$nombre."','".$apellidos."','".$coreo."','".$direccion."','".$telefono."')";
            if(!$consulta = $this->db->query($sql)){
            echo "Error insertar valores en la segunda tabla";
        }
        }
    }

       
    


//MODIFICAS LA BBDD 
    public function modificar2($usuario,$contrasenia,$nombre,$apellidos,$coreo,$direccion,$telefono){
        $sql = "UPDATE usuarios SET usuario='".$usuario."' WHERE usuario='".$usuario."' and contrasenia='".$contrasenia."'";
        if(!$consulta = $this->db->query($sql)){
            echo "Error modificar valores en la primera tabla";
        }
        $sql = "UPDATE datos SET usuario='".$usuario."',nombre='".$nombre."',apellidos='".$apellidos."',correo='".$coreo."',direccion='".$direccion."',telefono='".$telefono."' WHERE usuario='".$usuario."'";
        if(!$consulta = $this->db->query($sql)){
            echo "Error modificar valores en la segunda tabla";
        }else{
            echo "Datos modificados correctamente";
        }
       
      
    }

    public function modificar($usuario,$nombre,$apellidos,$coreo,$direccion,$telefono){
        $sql = "UPDATE datos SET usuario='".$usuario."',nombre='".$nombre."',apellidos='".$apellidos."',correo='".$coreo."',direccion='".$direccion."',telefono='".$telefono."' WHERE usuario='".$usuario."'";
        if(!$consulta = $this->db->query($sql)){
            echo "Error modificar valores en la segunda tabla";
        }else{
            echo "Datos modificados correctamente";
        }



    }


//OBTENER USUARIO    
    public static function obtenerUsuario($id){  
        $sql = "SELECT * FROM datos WHERE usuario = '" . $id . "'"; 
        $consulta = $this->db->query($sql);
        if (mysqli_num_rows($consulta) > 0) { 
            $row = $consulta->fetch_array(MYSQLI_ASSOC);  
            return $row;
        } else {          
            return false;
        }
       
    }


//BORRAS EL USUARIO DE LA BBDD 
    public function borrar($user){
        $sql = "DELETE FROM usuarios WHERE usuario = '" . $user . "'"; 
        if(!$consulta = $this->db->query($sql)){
            echo "Error borrar valores en la primera tabla";
        }
        $sql = "DELETE FROM datos WHERE usuario = '" . $user . "'"; 
        if(!$consulta = $this->db->query($sql)){
            echo "Error borrar valores en la segunda tabla";
        }else{
            echo "Datos borrados correctamente";
        }
    }
       
}

?>

