<?php

declare(strict_types=1);

/*
 * This file is part of the Symfony Mailer Command Bundle.
 *
 * (c) inspiredminds
 *
 * @license LGPL-3.0-or-later
 */

namespace InspiredMinds\SymfonyMailerCommandBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SymfonyMailerCommandBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
