<?php

namespace App\Examples\AbstractFactory\Real\Renderers\Concrete;

use App\Examples\AbstractFactory\Real\Renderers\Abstract\TemplateRenderer;
use Twig\Loader\ArrayLoader;
use Twig\Environment;

/**
 * The renderer for Twig templates.
 */
class TwigRenderer implements TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string
    {
        $loader = new ArrayLoader([
            'index' => 'Hello {{ name }}!',
        ]);
        $twig = new Environment($loader);     
     
        return $twig->render('index', ['name' => 'Fabien']);
    }
}