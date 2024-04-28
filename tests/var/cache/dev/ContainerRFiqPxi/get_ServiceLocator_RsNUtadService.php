<?php

namespace ContainerRFiqPxi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RsNUtadService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rsNUtad' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rsNUtad'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorieRepository' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'espacepartenaire' => ['privates', '.errored..service_locator.rsNUtad.App\\Entity\\Espacepartenaire', NULL, 'Cannot autowire service ".service_locator.rsNUtad": it references class "App\\Entity\\Espacepartenaire" but no such service exists.'],
        ], [
            'categorieRepository' => 'App\\Repository\\CategorieRepository',
            'entityManager' => '?',
            'espacepartenaire' => 'App\\Entity\\Espacepartenaire',
        ]);
    }
}
