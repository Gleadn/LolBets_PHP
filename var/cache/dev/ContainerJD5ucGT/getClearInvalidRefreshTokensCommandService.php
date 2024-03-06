<?php

namespace ContainerJD5ucGT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClearInvalidRefreshTokensCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Gesdinet\JWTRefreshTokenBundle\Command\ClearInvalidRefreshTokensCommand' shared service.
     *
     * @return \Gesdinet\JWTRefreshTokenBundle\Command\ClearInvalidRefreshTokensCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/gesdinet/jwt-refresh-token-bundle/Command/ClearInvalidRefreshTokensCommand.php';

        $container->privates['Gesdinet\\JWTRefreshTokenBundle\\Command\\ClearInvalidRefreshTokensCommand'] = $instance = new \Gesdinet\JWTRefreshTokenBundle\Command\ClearInvalidRefreshTokensCommand(($container->services['gesdinet.jwtrefreshtoken.refresh_token_manager'] ?? $container->load('getGesdinet_Jwtrefreshtoken_RefreshTokenManagerService')));

        $instance->setName('gesdinet:jwt:clear');
        $instance->setDescription('Clear invalid refresh tokens.');

        return $instance;
    }
}
