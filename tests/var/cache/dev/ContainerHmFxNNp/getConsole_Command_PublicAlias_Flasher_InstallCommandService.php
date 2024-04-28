<?php

namespace ContainerHmFxNNp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_PublicAlias_Flasher_InstallCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'console.command.public_alias.flasher.install_command' shared service.
     *
     * @return \Flasher\Symfony\Command\InstallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-flasher'.\DIRECTORY_SEPARATOR.'flasher-symfony'.\DIRECTORY_SEPARATOR.'Bridge'.\DIRECTORY_SEPARATOR.'Legacy'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'FlasherCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-flasher'.\DIRECTORY_SEPARATOR.'flasher-symfony'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'InstallCommand.php';

        return $container->services['console.command.public_alias.flasher.install_command'] = new \Flasher\Symfony\Command\InstallCommand();
    }
}
