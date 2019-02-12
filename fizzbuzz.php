<?php
class FizzBuzz {

    public $numero = null;
    
    public function __construct($numero = null) {
        $this->numero = $numero;
    }

public function retornaFizz(){
    $fizzBuzz = $this->numero;
    if($this->numero % 3 == 0 ) $fizzBuzz = 'Fizz';
    return $fizzBuzz;
    }
}

?>