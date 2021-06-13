<?php

namespace App\Examples\AbstractFactory\Conceitual\Products\Concrete;

use App\Examples\AbstractFactory\Conceitual\Products\Abstract\AbstractProductA;

/**
 * Concrete Products are created by corresponding Concrete Factories.
 */
class ConcreteProductA1 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return "The result of the product A1.";
    }
}