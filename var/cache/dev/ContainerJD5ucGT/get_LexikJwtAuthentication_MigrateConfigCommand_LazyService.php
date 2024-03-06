<?php

namespace ContainerJD5ucGT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_LexikJwtAuthentication_MigrateConfigCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.lexik_jwt_authentication.migrate_config_command.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.lexik_jwt_authentication.migrate_config_command.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('lexik:jwt:migrate-config', [], 'Migrate LexikJWTAuthenticationBundle configuration to the Web-Token one.', false, #[\Closure(name: 'lexik_jwt_authentication.migrate_config_command', class: 'Lexik\\Bundle\\JWTAuthenticationBundle\\Command\\MigrateConfigCommand')] function () use ($container): \Lexik\Bundle\JWTAuthenticationBundle\Command\MigrateConfigCommand {
            return ($container->privates['lexik_jwt_authentication.migrate_config_command'] ?? $container->load('getLexikJwtAuthentication_MigrateConfigCommandService'));
        });
    }
}
