<?php

require_once(__DIR__ . "/product.php");

class Tshirt extends Product {
    protected $shirtType;
    protected $color;
    protected $size;
    public $price;

    function __construct($cloType, $tShirtType, $tShirtColor, $tShirtSize, $tShirtPrice) {
        parent::__construct($cloType);

        $this->shirtType = $tShirtType;
        $this->color = $tShirtColor;
        $this->size = $tShirtSize;
        $this->price = $tShirtPrice;
    }
}