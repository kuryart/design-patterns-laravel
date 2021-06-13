<?php

namespace App\Examples\AbstractFactory\Conceitual\Factories\Concrete;

use App\Examples\AbstractFactory\Conceitual\Factories\Abstract\AbstractFactory;
use App\Examples\AbstractFactory\Conceitual\Products\Abstract\AbstractProductA;
use App\Examples\AbstractFactory\Conceitual\Products\Abstract\AbstractProductB;
use App\Examples\AbstractFactory\Conceitual\Products\Concrete\ConcreteProductA1;
use App\Examples\AbstractFactory\Conceitual\Products\Concrete\ConcreteProductB1;

/**
 * Concrete Factories produce a family of products that belong to a single
 * variant. The factory guarantees that resulting products are compatible. Note
 * that signatures of the Concrete Factory's methods return an abstract product,
 * while inside the method a concrete product is instantiated.
 */
class ConcreteFactory1 implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA1();
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB1();
    }
}