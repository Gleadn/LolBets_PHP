<?php

namespace Container1hjegBg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_Command_DumpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'nelmio_api_doc.command.dump' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Command\DumpCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/src/Command/DumpCommand.php';

        $container->services['nelmio_api_doc.command.dump'] = $instance = new \Nelmio\ApiDocBundle\Command\DumpCommand(($container->services['nelmio_api_doc.render_docs'] ?? $container->load('getNelmioApiDoc_RenderDocsService')));

        $instance->setName('nelmio:apidoc:dump');

        return $instance;
    }
}
