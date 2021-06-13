<?php

namespace App\Examples\AbstractFactory\Real\Factories\Abstract;

use App\Examples\AbstractFactory\Real\Products\Abstract\TitleTemplate;
use App\Examples\AbstractFactory\Real\Products\Abstract\PageTemplate;
use App\Examples\AbstractFactory\Real\Renderers\Abstract\TemplateRenderer;

/**
 * The Abstract Factory interface declares creation methods for each distinct
 * product type.
 */
interface TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate;
    public function createPageTemplate(): PageTemplate;
    public function getRenderer(): TemplateRenderer;
}