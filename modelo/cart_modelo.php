<?php

$error = "";

class Cart_modelo{
    private $db;
    private $cart;

    public function __construct(){
        require_once("modelo/Conectar.php");
        $this->db=Conectar::conexion();
        $this->cart=array();
    }

    public function getPedidos(){
        $sql="SELECT * FROM pedidos";
        $consulta = $this->db->query($sql);
        while($registro=$consulta->fetch_assoc()){
            $this->cart[]=$registro;
        }
        return $this->cart;
    }


   





?>
