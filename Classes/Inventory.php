<?php

class Inventory {
    private $products = array();

    public function addProduct($product) {
        array_push($products, $product);
    }

    public function getProducts() {
        return $this->products;
    }
}