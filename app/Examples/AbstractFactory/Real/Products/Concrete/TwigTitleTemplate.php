<?php

namespace App\Examples\AbstractFactory\Real\Products\Concrete;

use App\Examples\AbstractFactory\Real\Products\Abstract\TitleTemplate;

/**
 * This Concrete Product provides Twig page title templates.
 */
class TwigTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h1>{{ title }}</h1>";
    }
}