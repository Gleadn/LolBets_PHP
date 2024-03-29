<?php

namespace ContainerJD5ucGT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E0O5x1DService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.e0O5x1D' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.e0O5x1D'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'match' => ['privates', '.errored..service_locator.e0O5x1D.App\\Entity\\Matchs', NULL, 'Cannot autowire service ".service_locator.e0O5x1D": it references class "App\\Entity\\Matchs" but no such service exists.'],
            'serializer' => ['privates', 'serializer', 'getSerializerService', true],
        ], [
            'match' => 'App\\Entity\\Matchs',
            'serializer' => '?',
        ]);
    }
}
