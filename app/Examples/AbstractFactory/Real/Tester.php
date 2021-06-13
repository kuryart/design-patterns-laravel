<?php

namespace App\Examples\AbstractFactory\Real;

use App\Examples\AbstractFactory\Real\Client\Page;
use App\Examples\AbstractFactory\Real\Factories\Concrete\PHPTemplateFactory;
use App\Examples\AbstractFactory\Real\Factories\Concrete\TwigTemplateFactory;

class Tester
{
    public function test()
    {
        /**
         * Now, in other parts of the app, the client code can accept factory objects of
         * any type.
         */
        $page = new Page('Sample page', 'This it the body.');

        $result = "Testing actual rendering with the PHPTemplate factory:\n";
        $result .= $page->render(new PHPTemplateFactory());
        $result .= "Testing rendering with the Twig factory:\n"; 
        $result .= $page->render(new TwigTemplateFactory());

        dd($result);
    }
}