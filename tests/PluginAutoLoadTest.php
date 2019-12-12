<?php

namespace Huangdijia\LaravelPackageBuilder\Tests;

use PHPUnit\Framework\TestCase;

class PluginAutoloadTest extends TestCase
{
    public function testAutoload()
    {
        $this->assertTrue(class_exists('Huangdijia\ComposerPackageBuilder\Plugin'));
        $this->assertTrue(class_exists('Huangdijia\ComposerPackageBuilder\CommandProvider'));
        $this->assertTrue(class_exists('Huangdijia\ComposerPackageBuilder\Commands\BuildCommand'));
    }
}
