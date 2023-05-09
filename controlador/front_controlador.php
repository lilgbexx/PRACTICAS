<?php

function console_log($data)
{
    echo '<script>';
    echo 'console.log(' . json_encode($data) . ')';
    echo '</script>';
}

//La carpeta donde buscas los controladores
define('CONTROLLERS_FOLDER', "controlador/"); //CONTROLADOR

//Si no se indica un controlador, este es el controlador que se usará por defecto
define('DEFAULT_CONTROLLER', "home"); //Producto

//Si no se indica una acción, esta acción es la que se usará por defecto
define('DEFAULT_ACTION', "home");

//Obtienes el controlador por defecto.
$controller = DEFAULT_CONTROLLER;

//Si lo indicas, seleccionas el controlador indicado.
if (!empty($_GET['controlador'])) $controller = $_GET['controlador'];

//Obtienes la acción por defecto.
$action = DEFAULT_ACTION;

//Si lo indicas, seleccionas la indicada.
if (!empty($_GET['action'])) $action = $_GET['action'];

//Ya tienes el controlador y la accion

//Formas el nombre del fichero que contiene tu controlador
$controller = CONTROLLERS_FOLDER . $controller . '_controlador.php';

//_controlador.php

//Si la variable $controller es un fichero lo requeriras
try {
    if (is_file($controller)) require_once($controller);
    else
        throw new Exception('El controlador no existe - 404 not found');

    //Si la variable $action es una funcion la ejecutas o detienes el script
    if (is_callable($action)) $action();
    else
        throw new Exception('La accion no existe - 404 not found');
} catch (Exception $e) {
    console_log($e->getMessage());
}
