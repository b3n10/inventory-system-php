<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/Classes/Product.php";
$p = new Product("Colgate", 56.3, 2);
echo $p->getPrice();
