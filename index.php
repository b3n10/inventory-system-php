<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/Classes/Product.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/Classes/Inventory.php";

$inventory = new Inventory;
$colgate = new Product("Colgate", 56.3, 2);

$inventory->addProduct($colgate);

foreach ($inventory->getProducts() as $product) {
    echo $product->getName();
}
