<?php

class baseController {

    public function __construct() {
        require_once 'baseEntity.php';

        //Incluir todos los modelos
        foreach (glob("model/*.php") as $file) {
            require_once $file;
        }
    }

    public function url($controller = DEFAULT_CONTROLLER, $action = DEFAULT_ACTION) {

        $urlString = "index.php?controller=" . $controller .  "&action=" . $action;

        return $urlString;
    }

    public function view($view, $data) {
      //Llevo el array $datos a las vistas. 
      //El array lo cargo en el startController, con lo que necesite llevar a la vista $data después se usará en las vistas  
      require_once 'view/header.php';
      require_once 'view/' . $view . 'View.php';
      require_once 'view/footer.php';
    }
}
?>


