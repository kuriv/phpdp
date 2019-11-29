<?php

namespace PHPDesignPatterns\Creational\AbstractFactory;

use PHPUnit\Framework\TestCase;
use PHPDesignPatterns\Creational\AbstractFactory\BusFactory;
use PHPDesignPatterns\Creational\AbstractFactory\CarFactory;
use PHPDesignPatterns\Creational\AbstractFactory\Bus;
use PHPDesignPatterns\Creational\AbstractFactory\Car;
use PHPDesignPatterns\Creational\AbstractFactory\Engine;
use PHPDesignPatterns\Creational\AbstractFactory\Wheel;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateBusEngine()
    {
        $busFactory = new BusFactory;
        $busEngine = $busFactory->createEngine();
        $this->assertInstanceOf(Engine::class, $busEngine);
    }

    public function testCanCreateBusWheel()
    {
        $busFactory = new BusFactory;
        $busWheel = $busFactory->createWheel();
        $this->assertInstanceOf(Wheel::class, $busWheel);
    }

    public function testCanCreateCarEngine()
    {
        $carFactory = new CarFactory;
        $carEngine = $carFactory->createEngine();
        $this->assertInstanceOf(Engine::class, $carEngine);
    }

    public function testCanCreateCarWheel()
    {
        $carFactory = new CarFactory;
        $carWheel = $carFactory->createWheel();
        $this->assertInstanceOf(Wheel::class, $carWheel);
    }
}
