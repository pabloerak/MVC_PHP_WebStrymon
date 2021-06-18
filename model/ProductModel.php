<?php

class ProductModel extends baseEntity {

    private $table;

    public function __construct() {
        $this->table = "products";
        parent::__construct($this->table);
    }

//OBTIENE TODOS LOS PRODUCTOS. DEVUELVE UN ARRAY DE OBJETOS Product
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
                array_push($resultSet, new Product($row['Prod_no'], $row['Prod_name'], $row['Prod_desc'], $row['Price'], $row['Prod_image']));
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        //devuelve un array de objetos Product
        return $resultSet;     

    }

    //DEVUELVE EL NÚMERO DE FILAS DE LA TABLA PRODUCTOS. 
    public function getNumberProducts() {
        $sql = "select * from  $this->table ";
        $result = $this->db->query($sql);
        $numrows = $result->rowCount();
        return $numrows;
    }

}

?> 


