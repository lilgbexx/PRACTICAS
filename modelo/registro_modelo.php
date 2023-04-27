<?php
class registro_modelo{
#Conexion BBDD
public  $db; 

#Registro de BBDD
  public $datos; 

//FUNCION CONTRUCTOR
    public function __construct(){
        require_once("modelo/conectar.php");
        $this->db = Conectar::conexion();
        $this->datos = array();
    }

    public function get_datos(){
    $sql="SELECT * FROM datos";
    $consulta = $this->db->query($sql);
    while($registro=$consulta->fetch_assoc()){
        $this->datos[]=$registro;
    }
    return $this->datos;
    }


//INSERTAR EL USUARIO EN LA BBDD
public function insertar($usuario,$contrasenia,$nombre,$apellidos,$correo,$direccion,$telefono){
    $sql="INSERT INTO usuarios (usuario,contrasenia) VALUES ('$usuario','$contrasenia')";
    $consulta = $this->db->query($sql);
    $sql="INSERT INTO datos (usuario,nombre,apellidos,correo,direccion,telefono) VALUES ('$usuario','$nombre','$apellidos','$correo','$direccion','$telefono')";
    $consulta = $this->db->query($sql);
    return $consulta;

    
 }
 


 

}

?>
