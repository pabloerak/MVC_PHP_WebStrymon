<?php

//FUNCIONES PARA EL CONTROLADOR FRONTAL
//Carga un controlador u otro en funcion de lo que se pase por la URL

function loadController($controllerParam) {

    $controller = ucwords($controllerParam) . 'Controller';
   
    $strFileController = 'controller/' . $controller . '.php';

    if (!is_file($strFileController)) {
        $strFileController = 'controller/' . ucwords(DEFAULT_CONTROLLER) . 'Controller.php';
    }

    //Incluye el fichero y lo devuelve
    require_once $strFileController;
    $controllerObj = new $controller();
    return $controllerObj;

}

function loadAction($controllerObj, $actionParam) {

    $action = $actionParam;
    $controllerObj->$action();
}

function throwAction($controllerObj) {

    if (isset($_GET["action"]) && method_exists($controllerObj, $_GET["action"])) {
        loadAction($controllerObj, $_GET["action"]);
    } else {
        loadAction($controllerObj, DEFAULT_ACTION);
    }
}

?>


