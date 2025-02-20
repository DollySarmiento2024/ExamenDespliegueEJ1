<?php

use PHPUnit\Framework\TestCase;
use App_docker\Calculadora;

class FactorialTest extends TestCase
{
    public function testSuma()
    {
        $calc = new calcularFactorial();
        $this->assertGreaterThan(120, $calc->factorial(2, 5));
        
    }
}