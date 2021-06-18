<?php


class ImageModel extends baseEntity {

    private $table;

    public function __construct() {
        $this->table = "images";
        parent::__construct($this->table);
    }

//OBTIENE TODOS LAS IMAGENES. DEVUELVE UN ARRAY DE OBJETOS Image
    public function getAll() {
        $resultSet = array();
        try {
            $sql = "SELECT * FROM $this->table ;";
            $statement = $this->db->prepare($sql);
            $statement->execute();

            //con fetchAll tenemos un array de filas de productos
            $table = $statement->fetchAll(); //recupera los datos

            //Pasamos ese array a un array de objetos Producto      
            foreach ($table as $row) {
                array_push($resultSet, new Image($row['id_image'], $row['image_desc'], $row['image_graphic']));
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        //devuelve un array de objetos Image
        return $resultSet;     

    }
    
    //OBTIENE UNA IMAGEN. 
    public function getOne($id) {
       // $resultSet = null;
        try {
            $sql = "SELECT * FROM $this->table WHERE id_image = :id;";
            $statement = $this->db->prepare($sql);
            $statement->bindParam(':id', $id, PDO::PARAM_INT);
            $statement->execute();

            //con fetchAll tenemos un array de filas de productos
            $resultSet = $statement->fetch(); //recupera los datos
            $img=new Image($resultSet['id_image'], $resultSet['image_desc'], $resultSet['image_graphic']);
           
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        //devuelve un objeto Image
        return $img;     

    }

    //DEVUELVE EL NÚMERO DE FILAS DE LA TABLA Images. 
    public function getNumberImages() {
        $sql = "select * from  $this->table ";
        $result = $this->db->query($sql);
        $numrows = $result->rowCount();
        return $numrows;
    }

}

?>

