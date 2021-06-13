<?php

namespace App\Examples\AbstractFactory\Conceitual\Factories\Concrete;

use App\Examples\AbstractFactory\Conceitual\Factories\Abstract\AbstractFactory;
use App\Examples\AbstractFactory\Conceitual\Products\Abstract\AbstractProductA;
use App\Examples\AbstractFactory\Conceitual\Products\Abstract\AbstractProductB;
use App\Examples\AbstractFactory\Conceitual\Products\Concrete\ConcreteProductA2;
use App\Examples\AbstractFactory\Conceitual\Products\Concrete\ConcreteProductB2;

/**
 * Each Concrete Factory has a corresponding product variant.
 */
class ConcreteFactory2 implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA2();
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB2();
    }
}