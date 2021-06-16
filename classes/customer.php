<?php

class Customer {
    public $name;
    public $surname;
    public $email;
    private $id;

    function __construct($custName, $custSurname, $custEmail) {
        $this->setName($custName);
        $this->setSurname($custSurname);
        $this->setEmail($custEmail);
        $this->generateUserId();
    }

    public function setName($value) {
        $this->name = $value;

        $this->generateUserId();

        if ((strlen($value)) > 10) {
            throw new Exception("Il nome inserito è troppo lungo");
        }
    }

    public function getName() {
        return $this->name;
    }

    public function setSurname($value) {
        $this->surname = $value;

        $this->generateUserId();

        if (!ctype_alpha($value)) {
            throw new Exception("Il cognome può contenere solo lettere");
        }
    }

    public function getSurname() {
        return $this->surname;
    }

    public function setEmail($value) {
        $this->email = $value;

        if (!strstr($value, "@")) {
            throw new Exception("L'indirizzo e-mail inserito non è valido");
        }
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