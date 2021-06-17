<?php

require_once(__DIR__ . "/product.php");

class Pant extends Product {
    protected $pantType;
    protected $color;
    protected $size;
    public $price;

    function __construct($cloType, $panType, $panColor, $panSize, $panPrice) {
        parent::__construct($cloType);

        $this->shirtType = $panType;
        $this->color = $panColor;
        $this->size = $panSize;
        $this->price = $panPrice;
    }
}