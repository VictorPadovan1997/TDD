<?php
class FizzBuzz {

    public $numero = null;
    
    public function __construct($numero = null) {
        $this->numero = $numero;
    }

    public function retornaFizz($numero = null) {
        if ($this->numero % 3 == 0) { 
            return "fizz";
        }
    }

    public function retornaBuzz($numero = null) {
        if ($this->numero % 5 == 0) {
            return "buzz";
        }
    }

    public function retornaFizzbuzz($numero = null) {
        if (($this->numero % 3 && $this->numero % 5) == 0) {
            return "fizzbuzz";
        }
    }

    public function retornaNumero($numero = null) {
        if (($this->numero % 3 && $this->numero % 5) != 0) {
            return $numero;
        }
    }
    
}

?>
