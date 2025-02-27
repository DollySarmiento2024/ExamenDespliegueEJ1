<?php

use App\Factorial;
use PHPUnit\Framework\TestCase;

class FactorialTest extends TestCase
{
    public function testFactorial()
    {
        $factorial = new Factorial();
        
        $this->assertEquals(120, $factorial->calcularFactorial(5));
        $this->assertNotEmpty($factorial->calcularFactorial(5));
        
    }
}