<?php

require_once(__DIR__ . "/customer.php");

class CustomerPremium extends Customer {

    public $codeDiscount;
    public $discount;
    
    function __construct($custName, $custSurname, $custEmail, $totPrice, $custCodeDisc) {
        parent::__construct($custName, $custSurname, $custEmail, $totPrice);

        $this->setCodeDiscount($custCodeDisc);
    }

    public function setCodeDiscount($value) {
        if ($value = "BOOL20") {
            $discount = 0.8;
        } else if ($value = "BOOL50") {
            $discount = 0.5;
        } else {
            $discount = 0;
        }
    }

    public function getCodeDiscount() {
        return $this->codeDiscount;
    }


}