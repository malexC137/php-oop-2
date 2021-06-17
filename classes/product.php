<?php

class Product {
    protected $brand = "Boolwear";
    protected $type;

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