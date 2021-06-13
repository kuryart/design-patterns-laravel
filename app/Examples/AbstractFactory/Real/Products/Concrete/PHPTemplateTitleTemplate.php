<?php

namespace App\Examples\AbstractFactory\Real\Products\Concrete;

use App\Examples\AbstractFactory\Real\Products\Abstract\TitleTemplate;

/**
 * And this Concrete Product provides PHPTemplate page title templates.
 */
class PHPTemplateTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h1><?= \$title; ?></h1>";
    }
}