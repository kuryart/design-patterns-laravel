<?php

namespace App\Examples\AbstractFactory\Conceitual\Client;

use App\Examples\AbstractFactory\Conceitual\Factories\Abstract\AbstractFactory;

/**
 * The client code works with factories and products only through abstract
 * types: AbstractFactory and AbstractProduct. This lets you pass any factory or
 * product subclass to the client code without breaking it.
 */
class Client {

    function clientCode(AbstractFactory $factory)
    {
        $productA = $factory->createProductA();
        $productB = $factory->createProductB();
    
        echo $productB->usefulFunctionB() . "\n";
        echo $productB->anotherUsefulFunctionB($productA) . "\n";
    }
}

