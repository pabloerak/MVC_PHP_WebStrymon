<?php

class UserModel extends baseEntity {

    private $table;

    public function __construct() {
        $this->table = "users";
        parent::__construct($this->table);
    }

//OBTIENE UN USUARIO. 
    public function getOneUser($name) {
      
        try {
            $sql = "SELECT * FROM $this->table WHERE user_name = :name;";
            $statement = $this->db->prepare($sql);
            $statement->bindParam(':name', $name, PDO::PARAM_STR);
            $statement->execute();

            //$resultSet = $statement->fetch(); //recupera los datos
            
            if($statement->rowCount()==1){
                return true;
            }else{
                return false;
            }
           // $user=new User($resultSet['id_user'], $resultSet['user_name'], $resultSet['password_user']);
           
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
 
    }
    
    //PARA EL REGISTRO DE UN NUEVO USUARIO
    public function insertUser($name, $password){
        
        $insert=false;
          try {
            $sql = "INSERT INTO $this->table VALUES(null, :name, :password);";
            $statement = $this->db->prepare($sql);
            $statement->bindParam(':name', $name, PDO::PARAM_STR);
            $statement->bindParam(':password', $password, PDO::PARAM_STR);
            
            $statement->execute();
            $insert=true;
           
        } catch (PDOException $e) {
            echo $e->getMessage();
            $insert=false;         
        }
        return $insert;
    }
    
    
    

   

}

?>

