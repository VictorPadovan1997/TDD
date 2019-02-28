<?php
class FizzBuzz {

    public $numero = null;
    
    public function __construct($numero = null) {
        $this->numero = $numero;
    }

    public function dividirPorTres($numero = null) {
        if ($this->numero % 3 == 0) { 
            return "fizz";
        }
    }

    public function dividirPorCinco($numero = null) {
        if ($this->numero % 5 == 0) {
            return "buzz";
        }
    }

    public function dividirPorAmbos($numero = null) {
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
