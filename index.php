<?php

require_once("./classes/customer.php");
require_once("./classes/customer-premium.php");
require_once("./classes/product.php");
require_once("./classes/t-shirt.php");
require_once("./classes/pant.php");

$product1 = new Product("Pants", "35$");
$tShirt1 = new Tshirt("T-shirt", "25$", "V-neck", "White", "M");
$pant1 = new Pant("Pant", "60$", "Denim", "Bleached", "46");

var_dump($product1);
var_dump($tShirt1);
var_dump($pant1);