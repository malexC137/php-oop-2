<?php

require_once(__DIR__ . "/product.php");

class Tshirt extends Product {
    public $shirtType;
    public $color;
    public $size;

    function __construct($cloType, $cloCost, $tShirtType, $tShirtColor, $tShirtSize) {
        parent::__construct($cloType, $cloCost);

        $this->shirtType = $tShirtType;
        $this->color = $tShirtColor;
        $this->size = $tShirtSize;
    }
}