<?php

class Product {
    private $name;
    private $price;
    private $quantity;

    public function __construct($name, $price, $quantity) {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $name;
    }

    public function setPrice($price) {
        $this->price = $price;
    }
    public function getPrice() {
        return $this->price;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }
    public function getQuantity() {
        return $this->quantity;
    }
}
