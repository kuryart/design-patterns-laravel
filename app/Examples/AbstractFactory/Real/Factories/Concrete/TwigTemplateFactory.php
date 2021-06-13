<?php

namespace App\Examples\AbstractFactory\Real\Factories\Concrete;

use App\Examples\AbstractFactory\Real\Factories\Abstract\TemplateFactory;
use App\Examples\AbstractFactory\Real\Products\Abstract\TitleTemplate;
use App\Examples\AbstractFactory\Real\Products\Abstract\PageTemplate;
use App\Examples\AbstractFactory\Real\Products\Concrete\TwigTitleTemplate;
use App\Examples\AbstractFactory\Real\Products\Concrete\TwigPageTemplate;
use App\Examples\AbstractFactory\Real\Renderers\Abstract\TemplateRenderer;
use App\Examples\AbstractFactory\Real\Renderers\Concrete\TwigRenderer;


/**
 * Each Concrete Factory corresponds to a specific variant (or family) of
 * products.
 *
 * This Concrete Factory creates Twig templates.
 */
class TwigTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new TwigTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new TwigPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new TwigRenderer();
    }
}