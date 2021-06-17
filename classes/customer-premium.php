<?php

require_once(__DIR__ . "/customer.php");

class CustomerPremium extends Customer {

    protected $codeDiscount;
    protected $discount;
    
    function __construct($custName, $custSurname, $custEmail) {
        parent::__construct($custName, $custSurname, $custEmail);
    }
}