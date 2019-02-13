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
    public function divCinco() {
        if ($this->numero % 5 == 0) {
            return "buzz";
        }
    }

}

?>
