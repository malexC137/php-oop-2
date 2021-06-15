<?php

class Product {
    public $brand = "Boolwear";
    public $type;
    public $cost;

    function __construct($cloType, $cloCost) {
        $this->type = $cloType;
        $this->cost = $cloCost;
    }
}