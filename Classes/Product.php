<?php

class Product {
    protected $product;
    protected $brand;
    protected $animal;
    protected $price;

    function __construct($_product, $_brand, $_animal, $_price){
        $this->product = $_product;
        $this->brand = $_brand;
        $this->animal = $_animal;
        $this->price = $_price;
    }

    public function setProduct($_product){
        $this->product = $_product;
    }
    public function getProduct(){
        return $this->product;
    }

    public function setBrand($_brand){
        $this->brand = $_brand;
    }
    public function getBrand(){
        return $this->brand;
    }

    public function setAnimal($_animal){
        $this->animal = $_animal;
    }
    public function getAnimal(){
        return $this->animal;
    }

    public function setPrice($_price){
        $this->price = $_price;
    }
    public function getPrice(){
        return $this->price;
    }

}
