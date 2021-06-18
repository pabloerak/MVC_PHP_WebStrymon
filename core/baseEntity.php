<?php

class baseEntity{
    
    private $table;
    public $db;
    
    public function __construct($table) {
       
        $this->table=(string) $table;
        
        require_once 'connect.php';
        
        $database = new connect();
        $this->db = $database->getConnection();
        
    }    

}
?>


