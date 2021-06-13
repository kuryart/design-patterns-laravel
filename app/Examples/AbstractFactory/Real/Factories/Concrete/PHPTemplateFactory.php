<?php

namespace App\Examples\AbstractFactory\Real\Factories\Concrete;

use App\Examples\AbstractFactory\Real\Factories\Abstract\TemplateFactory;
use App\Examples\AbstractFactory\Real\Products\Abstract\TitleTemplate;
use App\Examples\AbstractFactory\Real\Products\Abstract\PageTemplate;
use App\Examples\AbstractFactory\Real\Products\Concrete\PHPTemplateTitleTemplate;
use App\Examples\AbstractFactory\Real\Products\Concrete\PHPTemplatePageTemplate;
use App\Examples\AbstractFactory\Real\Renderers\Abstract\TemplateRenderer;
use App\Examples\AbstractFactory\Real\Renderers\Concrete\PHPTemplateRenderer;

/**
 * And this Concrete Factory creates PHPTemplate templates.
 */
class PHPTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new PHPTemplateTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new PHPTemplatePageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new PHPTemplateRenderer();
    }
}