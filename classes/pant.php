<?php

require_once(__DIR__ . "/product.php");

class Pant extends Product {
    public $pantType;
    public $color;
    public $size;

    function __construct($cloType, $cloCost, $panType, $panColor, $panSize) {
        parent::__construct($cloType, $cloCost);

        $this->shirtType = $panType;
        $this->color = $panColor;
        $this->size = $panSize;
    }
}