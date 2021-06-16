<?php

// esercizio di oggi:
// nome repo: php-oop-2
// Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online;
// ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
// Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
// Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
// $c = new CreditCard(..);
// $user->insertCreditCard($c);
// BONUS: Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta).


require_once("./classes/customer.php");
require_once("./classes/customer-premium.php");
require_once("./classes/product.php");
require_once("./classes/t-shirt.php");
require_once("./classes/pant.php");
require_once("./classes/cart.php");

try {
    $customer1 = new Customer("Simone", "Maletta", "simomalex46@gmail.com");
    $product1 = new Product("Pants", "35$");

    $tShirt1 = new Tshirt("T-shirt", "V-neck", "White", "M", 25);

    $pant1 = new Pant("Pant", "Denim", "Bleached", "46", 60);

    $price1 = $tShirt1->price;
    $price2 = $pant1->price;

    $cart1 = new Cart($customer1);
    $cart1->addToCart($tShirt1);
    $cart1->addToCart($tShirt1);
    $cart1->addToCart($pant1);
    $cart1->getTotalPrice($price1);
    $cart1->getTotalPrice($price1);
    $cart1->getTotalPrice($price2);

    $premiumCustomer1 = new CustomerPremium("Mario", "Rossi", "mario.rossi@gmail.com");

    var_dump($customer1);
    var_dump($premiumCustomer1);
     var_dump($cart1);

} catch (Exception $e) {
    var_dump($e->getMessage());
}


