<?php
class productos_modelo{

    private $db;

    private $productos;

    public function __construct(){
        require_once("modelo/conectar.php");
        $this->db = conectar::conexion();
        $this->productos = array();
    }


    public function get_productos(){
        $sql="SELECT * FROM productos";
        $consulta = $this->db->query($sql);
        while($registro=$consulta->fetch_assoc()){
            $this->productos[]=$registro;
        }
        return $this->productos;
    }
    
    public function enviar($id_producto){
        $sql="SELECT * FROM productos WHERE id_producto='".$id_producto."'";
        $consulta = $this->db->query($sql);
        while($registro=$consulta->fetch_assoc()){
            $this->productos[]=$registro;
        }
        return $this->productos;
    }

    public function insertarProducto($nombre,$tipo,$talla,$precio,$ruta ){
        $sql="INSERT INTO productos (nombre,tipo,talla,precio,ruta) VALUES ('$nombre','$tipo','$talla','$precio','$ruta')";
        $consulta = $this->db->query($sql);
        return $consulta;
    }

    public function modificar($id_producto,$nombre,$tipo,$talla,$precio,$ruta){
        $sql = "UPDATE productos SET ruta='$ruta',precio='$precio',talla='$talla',tipo='$tipo',nombre='$nombre' WHERE id_producto='".$id_producto."'";
        if(!$consulta = $this->db->query($sql)){  
            echo "Error modificar valores en la primera tabla";
        }
    }


    public function borrar($id_producto){
        $sql1 = "DELETE FROM productos WHERE id_producto='".$id_producto."'";
        if(!$consulta = $this->db->query($sql1)){
            echo "Error al borrar la imagen en la primera tabla,vuelvelo a intentar";
        }
    }

    

       
    
}


?>


        

