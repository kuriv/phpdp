<?php

namespace Kuriv\PHPDesignPatterns\More\ServiceLocator;

use PHPUnit\Framework\TestCase;

class ServiceLocatorTest extends TestCase
{
    public function testHasServices()
    {
        $serviceLocator = new ServiceLocator;
        $serviceLocator->addInstance(LogService::class, new LogService);
        $this->assertTrue($serviceLocator->has(LogService::class));
        $this->assertFalse($serviceLocator->has(self::class));
    }

    public function testMethodWillInstantiateLogServiceIfNoInstanceHasBeenCreatedYet()
    {
        $serviceLocator = new ServiceLocator;
        $serviceLocator->addParameter(LogService::class, []);
        $this->assertTrue($serviceLocator->has(LogService::class));
        $this->assertInstanceOf(LogService::class, $serviceLocator->getInstance(LogService::class));
    }
}
