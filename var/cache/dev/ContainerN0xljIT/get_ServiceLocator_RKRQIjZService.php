<?php

namespace ContainerN0xljIT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RKRQIjZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RKRQIjZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RKRQIjZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'notesRepository' => ['privates', 'App\\Repository\\NotesRepository', 'getNotesRepositoryService', true],
        ], [
            'notesRepository' => 'App\\Repository\\NotesRepository',
        ]);
    }
}
