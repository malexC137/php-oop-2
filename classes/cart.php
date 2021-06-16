<?php

class Cart {
    private $customer;
    private $products = [];
    private $totPrice = 0;

    public function __construct($customer) {
        $this->customer = $customer;
    }

    public function addToCart($product) {
        $this->products = $product;
    }

    public function getTotalPrice($productPrice) {
        $this->totPrice = $this->totPrice + $productPrice;
    }


}
