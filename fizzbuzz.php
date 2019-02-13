<?php
class FizzBuzz {

    public $numero = null;
    
    public function __construct($numero = null) {
        $this->numero = $numero;
    }

    public function divTres($numero = null) {
        if ($this->numero % 3 == 0) { 
            return "fizz";
        }
    }

    public function divCinco($numero = null) {
        if ($this->numero % 5 == 0) {
            return "buzz";
        }
    }

    public function divTresCinco($numero = null) {
        if (($this->numero % 3 && $this->numero % 5) == 0) {
            return "fizzbuzz";
        }
    }

    public function naoDivisivel($numero = null) {
        if (($this->numero % 3 && $this->numero % 5) != 0) {
            return $numero;
        }
    }
    
}

?>
