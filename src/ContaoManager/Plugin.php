<?php

declare(strict_types=1);

/*
 * This file is part of the Contao Mailer Command extension.
 *
 * (c) inspiredminds
 *
 * @license LGPL-3.0-or-later
 */

namespace InspiredMinds\ContaoMailerCommand\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use InspiredMinds\SymfonyMailerCommandBundle\SymfonyMailerCommandBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(SymfonyMailerCommandBundle::class)
                ->setLoadAfter([FrameworkBundle::class]),
        ];
    }
}
