<?php

namespace Container1hjegBg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_S0luopmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.s0luopm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.s0luopm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cache' => ['privates', 'cache.app.taggable', 'getCache_App_TaggableService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'repository' => ['privates', 'App\\Repository\\MatchsRepository', 'getMatchsRepositoryService', true],
        ], [
            'cache' => '?',
            'manager' => '?',
            'repository' => 'App\\Repository\\MatchsRepository',
        ]);
    }
}
