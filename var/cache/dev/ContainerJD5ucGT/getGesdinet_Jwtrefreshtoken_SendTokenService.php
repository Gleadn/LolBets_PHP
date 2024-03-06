<?php

namespace ContainerJD5ucGT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGesdinet_Jwtrefreshtoken_SendTokenService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'gesdinet.jwtrefreshtoken.send_token' shared service.
     *
     * @return \Gesdinet\JWTRefreshTokenBundle\EventListener\AttachRefreshTokenOnSuccessListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/gesdinet/jwt-refresh-token-bundle/EventListener/AttachRefreshTokenOnSuccessListener.php';

        return $container->privates['gesdinet.jwtrefreshtoken.send_token'] = new \Gesdinet\JWTRefreshTokenBundle\EventListener\AttachRefreshTokenOnSuccessListener(($container->services['gesdinet.jwtrefreshtoken.refresh_token_manager'] ?? $container->load('getGesdinet_Jwtrefreshtoken_RefreshTokenManagerService')), 2592000, ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'refresh_token', false, ($container->services['gesdinet.jwtrefreshtoken.refresh_token_generator'] ?? $container->load('getGesdinet_Jwtrefreshtoken_RefreshTokenGeneratorService')), ($container->services['gesdinet.jwtrefreshtoken.request.extractor.chain'] ?? $container->load('getGesdinet_Jwtrefreshtoken_Request_Extractor_ChainService')), $container->parameters['gesdinet_jwt_refresh_token.cookie'], false, 'refresh_token_expiration');
    }
}