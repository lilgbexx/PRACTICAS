<?php
class conectar{

    public static function conexion(){
        try{
            $conexion= new mysqli("localhost:3307","root","","PROYECTO");
        }
        catch(Exception $e){
            die('Error!!!' );
        }

        return $conexion;
    }
}

?>