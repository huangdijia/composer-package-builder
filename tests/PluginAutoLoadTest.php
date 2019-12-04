<?php

namespace Huangdijia\LaravelPackageBuilder\Tests;

use Huangdijia\LaravelPackageBuilder\Composer\CommandProvider;
use Huangdijia\LaravelPackageBuilder\Composer\Commands\BuildCommand;
use Huangdijia\LaravelPackageBuilder\Composer\Plugin;
use PHPUnit\Framework\TestCase;

class PluginAutoloadTest extends TestCase
{
    public function testAutoload(): void
    {
        $this->assertTrue(class_exists(Plugin::class));
        $this->assertTrue(class_exists(CommandProvider::class));
        $this->assertTrue(class_exists(BuildCommand::class));
    }
}
