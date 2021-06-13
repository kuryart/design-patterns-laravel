<?php

namespace App\Examples\AbstractFactory\Conceitual\Factories\Abstract;

use App\Examples\AbstractFactory\Conceitual\Products\Abstract\AbstractProductA;
use App\Examples\AbstractFactory\Conceitual\Products\Abstract\AbstractProductB;

/**
 * The Abstract Factory interface declares a set of methods that return
 * different abstract products. These products are called a family and are
 * related by a high-level theme or concept. Products of one family are usually
 * able to collaborate among themselves. A family of products may have several
 * variants, but the products of one variant are incompatible with products of
 * another.
 */
interface AbstractFactory
{
    public function createProductA(): AbstractProductA;
    public function createProductB(): AbstractProductB;
}