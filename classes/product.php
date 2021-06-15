<?php

class Product {
    public $brand = "Boolwear";
    public $type;
    public $cost;

    function __construct($cloType, $cloCost) {
        $this->setType($cloType);
        $this->cost = $cloCost;
    }

    public function setType($value) {
        $this->type = $value;
    }

    public function getType() {
        return $this->type;
    }
}