<?php
class pedidos_modelo{

    private $db;

    private $pedidos;

    public function __construct(){
        require_once("modelo/conectar.php");
        $this->db = conectar::conexion();
        $this->pedidos = array();
    }


    public function get_pedidos(){
        $sql="SELECT * FROM pedidos";
        $consulta = $this->db->query($sql);
        while($registro=$consulta->fetch_assoc()){
            $this->pedidos[]=$registro;
        }
        return $this->pedidos;
    }

    public function comprar($id_pedido,$precio,$fecha,$cantidad,$id_productos,$id_cliente){
        $sql="INSERT INTO pedidos (id_pedido,precio,fecha,cantidad,id_productos,id_cliente) VALUES ('$id_pedido','$precio','$fecha','$cantidad','$id_productos','$id_cliente')";
        $consulta = $this->db->query($sql);
        return $consulta;
    }

    public function insertar($id_pedido,$precio,$fecha,$cantidad,$id_productos,$id_cliente){
        $sql="INSERT INTO pedidos (id_pedido,precio,fecha,cantidad,id_productos,id_cliente) VALUES ('$id_pedido','$precio','$fecha','$cantidad','$id_productos','$id_cliente')";
        $consulta = $this->db->query($sql);
        return $consulta;
    }

    public function modificar($id_pedido,$precio,$fecha,$cantidad,$id_productos,$id_cliente){
        $sql = "UPDATE pedidos SET id_pedido='".$id_pedido."' WHERE id_pedido='".$id_pedido."' and precio='".$precio."' and fecha='".$fecha."' and cantidad='".$cantidad."' and id_productos='".$id_productos."' and id_cliente='".$id_cliente."'";
        if(!$consulta = $this->db->query($sql)){  
            echo "Error modificar valores en la primera tabla";
        }
    }

    public function borrar($id_pedido){
        $sql1 = "DELETE FROM pedidos WHERE id_pedido='".$id_pedido."'";
        if(!$consulta = $this->db->query($sql1)){
            echo "Error al borrar la imagen en la primera tabla,vuelvelo a intentar";
        }
    }



}