<?php

class Image {
    
    private $idimage; //number of the product
    private $descimage; //description of the product
    private $imagegraphic; //price of the product
    
    function __construct($idimage, $descimage, $imagegraphic) {
        $this->idimage = $idimage;
        $this->descimage = $descimage;
        $this->imagegraphic = $imagegraphic;
    }
    
    public function getIdimage() {
        return $this->idimage;
    }

    public function getDescimage() {
        return $this->descimage;
    }

    public function getImagegraphic() {
        return $this->imagegraphic;
    }

    public function setIdimage($idimage): void {
        $this->idimage = $idimage;
    }

    public function setDescimage($descimage): void {
        $this->descimage = $descimage;
    }

    public function setImagegraphic($imagegraphic): void {
        $this->imagegraphic = $imagegraphic;
    }


    
}

?>

