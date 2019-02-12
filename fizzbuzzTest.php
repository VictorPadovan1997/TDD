<?php
    /**
    Passo 1 : Testar se a classe existe.
    Passo 2 : Verificar se esta recebedendo as informações 
    Passo 3 : Testar onde for dividido 3 ele retornar Fizz.
    Passo 4 : Testar onde for dividido 5 ele retornar Buzz.
    Passo 5 : Testar onde for dividido 3 e 5 ele retornar FIZBuzz.
    Passo 6 : Caso não for divisivel por ninguem retornar o numero.
    **/
    require_once('fizzbuzz.php');
    class fizzbuzzTest extends PHPUnit_Framework_TestCase {
        
        public function testExisteFizzBuzz(){
            $fizzbuzz = new FizzBuzz();
            $existe = is_a($fizzbuzz, 'FizzBuzz');
            $this->assertEquals(true, $existe);
        }
        public function testRecebendo() {
            $fizzbuzz = new FizzBuzz(1);
            $this->assertEquals(1, $fizzbuzz->numero);
        }
        public function testefizz(){
            $fizzbuzz = new FizzBuzz(3);
            $this->assertEquals("Fizz", $fizzbuzz->fizz());
        }
        public function testebuzz(){
            $fizzbuzz = new FizzBuzz(5);
            $this->assertEquals("Buzz", $fizzbuzz->buzz());
        }
        public function testefizzbuzz(){
            $fizzbuzz = new FizzBuzz(15);
            $this->assertEquals("FizzBuzz", $fizzbuzz->fizzbuzz());
        }
        public function testenumero(){
            $fizzbuzz = new FizzBuzz(1);
            $this->assertEquals(1, $fizzbuzz->numero());
        }
    }
?>