<?php

namespace ContainerN0xljIT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I4OXEvCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.I4OXEvC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.I4OXEvC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'note' => ['privates', '.errored..service_locator.I4OXEvC.App\\Entity\\Notes', NULL, 'Cannot autowire service ".service_locator.I4OXEvC": it references class "App\\Entity\\Notes" but no such service exists.'],
        ], [
            'note' => 'App\\Entity\\Notes',
        ]);
    }
}