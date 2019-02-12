<?php
class FizzBuzz {

    public $numero = null;
    
    public function __construct($numero = null) {
        $this->numero = $numero;
    }

    public function fizz($numero = null){
        if($numero % 3 == 0){
            return "Fizz";
        } 
    }

    public function buzz($numero = null){
        if($numero % 5 == 0){
            return "Buzz";
        } 
    }

    public function fizzBuzz($numero = null){
        if($numero % 15 == 0){
            return "FizzBuzz";
        } 
    }
}

?>