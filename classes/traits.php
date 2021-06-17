<?php

trait GetId {
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