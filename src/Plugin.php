<?php

namespace Huangdijia\ComposerPackageBuilder;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\Capability\CommandProvider as CmdProvider;
use Composer\Plugin\Capable;
use Composer\Plugin\PluginInterface;
use Huangdijia\ComposerPackageBuilder\CommandProvider;

class Plugin implements PluginInterface, Capable
{
    /**
     * Apply plugin modifications to Composer
     *
     * @param Composer $composer
     * @param IOInterface $io
     */
    public function activate(Composer $composer, IOInterface $io): void
    {
    }

    public function getCapabilities(): array
    {
        return array(
            CmdProvider::class => CommandProvider::class,
        );
    }
}
