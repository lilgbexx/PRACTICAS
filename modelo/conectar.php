<?php
class Conectar{

    public static function conexion(){
        try{
            $conexion= new mysqli("localhost","root","","gscompany");
        }
        catch(Exception $e){
            die('Error!!!' );
        }

        return $conexion;
    }
}

?>