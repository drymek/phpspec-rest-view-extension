<?php

namespace Codifico\PhpSpec\RestViewExtension;

use Codifico\PhpSpec\RestViewExtension\Matcher\RestViewMatcher;
use PhpSpec\Extension\ExtensionInterface;
use PhpSpec\Formatter\Presenter\PresenterInterface;
use PhpSpec\ServiceContainer;

class Extension implements ExtensionInterface
{

    /**
     * @param ServiceContainer $container
     */
    public function load(ServiceContainer $container)
    {
        $container->set('matchers.rest_view', function (ServiceContainer $c) {
            /** @var PresenterInterface $presenter */
            $presenter = $c->get('formatter.presenter');

            return new RestViewMatcher($presenter);
        });
    }
}
