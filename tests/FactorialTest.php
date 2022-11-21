<?php
require './src/Factorial.php';

use PHPUnit\Framework\TestCase;

class FactorialTest extends  TestCase{
    
    public function testFactorial()
    {
        
        
        $f=new Factorial();

        $this->assertEquals(1, $f>factorialCalculator(0));

        $this->assertEquals(1, $f->factorialCalculator(1));

        $this->assertEquals(120, $f->factorialCalculator(5)); 

        $this->assertEquals(null,$f->factorialCalculator(-3));

        $this->assertEquals(null,$f->factorialCalculator(1.5));

        $this->assertEquals(null,$f->factorialCalculator(false));

        $this->assertEquals(null,$f->factorialCalculator('abc'));   
    }
}





?>