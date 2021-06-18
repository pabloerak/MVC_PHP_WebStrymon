<?php

class Product {
    
    private $prodno; //number of the product
    private $prodname;//name of the product
    private $proddesc; //description of the product
    private $price; //price of the product
    private $image;//image of the product
    
    function __construct($prodno, $prodname, $proddesc, $price, $image) {
        $this->prodno = $prodno;
        $this->prodname = $prodname;
        $this->proddesc = $proddesc;
        $this->price = $price;
        $this->image = $image;   
    }
    
    function getProdno() {
        return $this->prodno;
    }
    
    function getProddesc() {
        return $this->proddesc;
    }
    
    function getPrice() {
        return $this->price;
    }
    
    public function setProdno($prodno): void {
        $this->prodno = $prodno;
    }

    public function setProddesc($proddesc): void {
        $this->proddesc = $proddesc;
    }

    public function setPrice($price): void {
        $this->price = $price;
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage($image): void {
        $this->image = $image;
    }


    public function getProdname() {
        return $this->prodname;
    }

    public function setProdname($prodname): void {
        $this->prodname = $prodname;
    }


}

?>

