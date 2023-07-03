<?php

namespace ContainerVk2NYnE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGesdinet_Jwtrefreshtoken_RefreshTokenManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'gesdinet.jwtrefreshtoken.refresh_token_manager' shared service.
     *
     * @return \Gesdinet\JWTRefreshTokenBundle\Doctrine\RefreshTokenManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'gesdinet'.\DIRECTORY_SEPARATOR.'jwt-refresh-token-bundle'.\DIRECTORY_SEPARATOR.'Model'.\DIRECTORY_SEPARATOR.'RefreshTokenManagerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'gesdinet'.\DIRECTORY_SEPARATOR.'jwt-refresh-token-bundle'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'RefreshTokenManager.php';

        return $container->services['gesdinet.jwtrefreshtoken.refresh_token_manager'] = new \Gesdinet\JWTRefreshTokenBundle\Doctrine\RefreshTokenManager(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)), 'App\\Entity\\RefreshToken');
    }
}
