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


}

?>

