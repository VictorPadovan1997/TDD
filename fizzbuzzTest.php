<?php
/**
Passo 1 : Testar se a classe existe.
Passo 2 : Verificar se esta recebedendo as informações 
Passo 3 : Testar onde for dividido 3 ele retornar Fizz.  //VICTOR
Passo 4 : Testar onde for dividido 5 ele retornar Buzz. //HERON
Passo 5 : Testar onde for dividido 3 e 5 ele retornar FIZBuzz. //JOYCE
Passo 6 : Caso não for divisivel por ninguem retornar o numero. //DUDU
 **/
require_once('fizzbuzz.php');

class fizzbuzzTest extends PHPUnit_Framework_TestCase {
    
    public function testExisteFizzBuzz(){
        $fizzbuzz = new FizzBuzz();
        $existe = is_a($fizzbuzz, 'FizzBuzz');
        $this->assertEquals(true, $existe);
    }

    public function testRecebendo() {
        $fizzbuzz = new FizzBuzz(3);
        $this->assertEquals(3, $fizzbuzz->numero);
    }
    //teste//
}

?>
