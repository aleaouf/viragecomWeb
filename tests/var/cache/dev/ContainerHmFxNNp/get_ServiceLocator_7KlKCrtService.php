<?php

namespace ContainerHmFxNNp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7KlKCrtService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7KlKCrt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7KlKCrt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'type' => ['privates', '.errored..service_locator.7KlKCrt.App\\Entity\\Type', NULL, 'Cannot autowire service ".service_locator.7KlKCrt": it references class "App\\Entity\\Type" but no such service exists.'],
        ], [
            'type' => 'App\\Entity\\Type',
        ]);
    }
}
