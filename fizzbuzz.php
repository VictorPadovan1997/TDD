<?php
class FizzBuzz {

    public $numero = null;
    public $fizz = 'fizz';
    public $buzz = 'buzz';
    public $fizzbuzz = 'fizzbuzz';
    
    public function __construct($numero = null) {
        $this->numero = $numero;
    }

    public function retornaFizz($numero = null) {
        if ($this->numero % 3 == 0) { 
            return $this->fizz;
        }
    }

    public function retornaBuzz($numero = null) {
        if ($this->numero % 5 == 0) {
            return $this->buzz;
        }
    }

    public function retornaFizzbuzz($numero = null) {
        if (($this->numero % 3 && $this->numero % 5) == 0) {
            return $this->fizzbuzz;
        }
    }

    public function retornaNumero($numero = null) {
        if (($this->numero % 3 && $this->numero % 5) != 0) {
            return $numero;
        }
    }
    
}

?>
