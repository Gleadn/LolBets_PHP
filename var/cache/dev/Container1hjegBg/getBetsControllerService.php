<?php

namespace Container1hjegBg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBetsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\BetsController' shared autowired service.
     *
     * @return \App\Controller\BetsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BetsController.php';

        $container->services['App\\Controller\\BetsController'] = $instance = new \App\Controller\BetsController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\BetsController', $container));

        return $instance;
    }
}
