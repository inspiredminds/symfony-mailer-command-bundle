<?php

declare(strict_types=1);

/*
 * This file is part of the Symfony Mailer Command Bundle.
 *
 * (c) inspiredminds
 *
 * @license LGPL-3.0-or-later
 */

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use InspiredMinds\SymfonyMailerCommandBundle\Command\SendCommand;

return static function (ContainerConfigurator $container): void {
    $container->services()
        ->set('inspiredminds.symfony_mailer_command.send_command', SendCommand::class)
            ->args([
                service('mailer'),
            ])
            ->tag('console.command')
    ;
};
