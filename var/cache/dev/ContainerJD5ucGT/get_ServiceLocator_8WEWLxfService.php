<?php

namespace ContainerJD5ucGT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8WEWLxfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8WEWLxf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8WEWLxf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'bet' => ['privates', '.errored..service_locator.8WEWLxf.App\\Entity\\Bets', NULL, 'Cannot autowire service ".service_locator.8WEWLxf": it references class "App\\Entity\\Bets" but no such service exists.'],
            'cache' => ['privates', 'cache.app.taggable', 'getCache_App_TaggableService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'repository' => ['privates', 'App\\Repository\\BetsRepository', 'getBetsRepositoryService', true],
        ], [
            'bet' => 'App\\Entity\\Bets',
            'cache' => '?',
            'manager' => '?',
            'repository' => 'App\\Repository\\BetsRepository',
        ]);
    }
}
