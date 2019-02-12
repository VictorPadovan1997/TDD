<?php
class FizzBuzz {
    public $numero = null;
    
    public function __construct($numero = null) {
        $this->numero = $numero;
    }
    public function fizz($numero = null)
     {
     	if($this->numero % 3 == 0) $fizzBuzz = 'Fizz';{
 		return $fizzBuzz;
 		}
     } 
    public function buzz($numero = null)
     {
     	if($this->numero % 5 == 0) $fizzBuzz = 'Buzz';{
 		return $fizzBuzz;
 		}
     }  
     public function fizzbuzz($numero = null)
     {
     	if(($this->numero % 5 && $this->numero %3) == 0) $fizzBuzz = 'FizzBuzz';{
 		return $fizzBuzz;
 		}
     } 
     public function numero($numero = null)
     {
     	if(($this->numero % 5 && $this->numero %3) != 0) $fizzBuzz = $this->numero;{
 		return $fizzBuzz;
 		}
     } 
}
?>
