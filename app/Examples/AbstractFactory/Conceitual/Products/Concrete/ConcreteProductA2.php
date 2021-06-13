<?php

namespace App\Examples\AbstractFactory\Conceitual\Products\Concrete;

use App\Examples\AbstractFactory\Conceitual\Products\Abstract\AbstractProductA;

class ConcreteProductA2 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return "The result of the product A2.";
    }
}