<?php
class FizzBuzz {

    public $numero = null;
    
    public function __construct($numero = null) {
        $this->numero = $numero;
    }


    public function fizzBuzz($numero = null){
    	if ($this->numero % 3 == 0) $fizzBuzz = 'fizz';{
    		return $fizzBuzz;
      }
    } 


    public function fizzbuzz2($numero = null){
    	if ($this->numero % 5 == 0) $fizzBuzz = 'Buzz';{
        	return $fizzBuzz;
      }
    }  
}

?>