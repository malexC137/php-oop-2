<?php

class Product {
    public $brand = "Boolwear";
    public $type;

    function __construct($cloType) {
        $this->setType($cloType);
    }

    public function setType($value) {
        $this->type = $value;
    }

    public function getType() {
        return $this->type;
    }
}