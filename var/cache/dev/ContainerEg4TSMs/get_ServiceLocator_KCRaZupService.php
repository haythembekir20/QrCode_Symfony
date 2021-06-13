<?php

namespace ContainerEg4TSMs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KCRaZupService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kCRaZup' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kCRaZup'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'qrcodeService' => ['privates', 'App\\Services\\QrcodeService', 'getQrcodeServiceService', true],
        ], [
            'qrcodeService' => 'App\\Services\\QrcodeService',
        ]);
    }
}
