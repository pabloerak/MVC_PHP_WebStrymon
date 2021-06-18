<?php
session_start();

//Configuración global
require_once 'config/global.php';
//Base para los controladores
require_once 'core/baseController.php';
//Funciones para el controlador frontal
require_once 'core/frontControllerFunct.php';
//comment

//Cargamos controladores y acciones
if (isset($_GET["controller"])) {
    $controllerObj = loadController($_GET["controller"]);
    throwAction($controllerObj);
} else {
    $controllerObj = loadController(DEFAULT_CONTROLLER);
    throwAction($controllerObj);
}
?>
