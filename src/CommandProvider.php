<?php

namespace Huangdijia\ComposerPackageBuilder;

use Composer\Plugin\Capability\CommandProvider as CommandProviderCapability;

class CommandProvider implements CommandProviderCapability
{
    /**
     * Retrieves an array of commands
     *
     * @return \Composer\Command\BaseCommand[]
     */
    public function getCommands(): array
    {
        return [
            new Commands\BuildLaravelPackageCommand(),
            new Commands\BuildPhpPackageCommand(),
            new Commands\BuildThinkPhpPackageCommand(),
        ];
    }
}
