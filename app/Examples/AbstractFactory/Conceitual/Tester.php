<?php

namespace App\Examples\AbstractFactory\Conceitual;

use App\Examples\AbstractFactory\Conceitual\Factories\Concrete\ConcreteFactory1;
use App\Examples\AbstractFactory\Conceitual\Factories\Concrete\ConcreteFactory2;
use App\Examples\AbstractFactory\Conceitual\Client\Client;

class Tester
{
    public function __construct(Client $client) {
        $this->client = $client;
    }

    public function test()
    {                
        /**
         * The client code can work with any concrete factory class.
         */
        echo "Client: Testing client code with the first factory type:\n";
        $this->client->clientCode(new ConcreteFactory1());

        echo "\n";

        echo "Client: Testing the same client code with the second factory type:\n";
        $this->client->clientCode(new ConcreteFactory2());
    }
}