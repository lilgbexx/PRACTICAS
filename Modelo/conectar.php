<?php

//Clase conectar para hacer la conexion con la BBDD 
class conectar{
    public static function conexion(){
        try{
        $conexion = new mysqli("localhost","root","","gscompany");
    }catch(Exception $e){
        die('Error:');
    }

        return $conexion;
    }

}


?>
