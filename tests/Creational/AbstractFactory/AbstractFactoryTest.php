<?php

namespace Kuriv\PHPDesignPatterns\Creational\AbstractFactory;

use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateBusEngine()
    {
        $busFactory = new BusFactory();
        $busEngine = $busFactory->createEngine();
        $this->assertInstanceOf(Engine::class, $busEngine);
    }

    public function testCanCreateBusWheel()
    {
        $busFactory = new BusFactory();
        $busWheel = $busFactory->createWheel();
        $this->assertInstanceOf(Wheel::class, $busWheel);
    }

    public function testCanCreateCarEngine()
    {
        $carFactory = new CarFactory();
        $carEngine = $carFactory->createEngine();
        $this->assertInstanceOf(Engine::class, $carEngine);
    }

    public function testCanCreateCarWheel()
    {
        $carFactory = new CarFactory();
        $carWheel = $carFactory->createWheel();
        $this->assertInstanceOf(Wheel::class, $carWheel);
    }
}
