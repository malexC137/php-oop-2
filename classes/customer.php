<?php

class Customer {
    public $name;
    public $surname;
    public $email;
    private $id;
    public $totalPrice;

    function __construct($custName, $custSurname, $custEmail, $totPrice) {
        $this->setName($custName);
        $this->setSurname($custSurname);
        $this->setEmail($custEmail);
        $this->generateUserId();
        $this->totalPrice = $totPrice;
    }

    public function setName($value) {
        $this->name = $value;

        $this->generateUserId();
    }

    public function getName() {
        return $this->name;
    }

    public function setSurname($value) {
        $this->surname = $value;

        $this->generateUserId();
    }

    public function getSurname() {
        return $this->surname;
    }

    public function setEmail($value) {
        $this->email = $value;
    }

    public function getEmail() {
        return $this->email;
    }

    private function generateUserId() {
        $string = $this->name . $this->surname;
        $idLength = 4;
    
        $userId = "";
    
        while (strlen($userId) <  $idLength) {
          $randNum = rand(0, strlen($string));
          $char = substr($string, $randNum, 1);
          $invalidChars = [".", "@"];
    
          if (!in_array($char, $invalidChars)) {
            $userId .= $char;
          }
        }
    
        $this->id = strtolower($userId);
      }

      public function getUserId() {
          return $this->id; 
      }
}