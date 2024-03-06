<?php

namespace ContainerJD5ucGT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IfSrOeSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ifSrOeS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ifSrOeS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cache' => ['privates', 'cache.app.taggable', 'getCache_App_TaggableService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'match' => ['privates', '.errored..service_locator.ifSrOeS.App\\Entity\\Matchs', NULL, 'Cannot autowire service ".service_locator.ifSrOeS": it references class "App\\Entity\\Matchs" but no such service exists.'],
            'repository' => ['privates', 'App\\Repository\\MatchsRepository', 'getMatchsRepositoryService', true],
        ], [
            'cache' => '?',
            'manager' => '?',
            'match' => 'App\\Entity\\Matchs',
            'repository' => 'App\\Repository\\MatchsRepository',
        ]);
    }
}