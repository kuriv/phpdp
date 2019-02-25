<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\AbstractFactory;

use PHPUnit\Framework\TestCase;
use PHPDesignPatterns\Creational\AbstractFactory\BusFactory;
use PHPDesignPatterns\Creational\AbstractFactory\Bus;
use PHPDesignPatterns\Creational\AbstractFactory\CarFactory;
use PHPDesignPatterns\Creational\AbstractFactory\Car;
use PHPDesignPatterns\Creational\AbstractFactory\Engine;
use PHPDesignPatterns\Creational\AbstractFactory\Headlight;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateBusEngine()
    {
        $busFactory = new BusFactory;
        $busEngine = $busFactory->createEngine();

        $this->assertInstanceOf(Engine::class, $busEngine);
    }

    public function testCanCreateBusHeadlight()
    {
        $busFactory = new BusFactory;
        $busHeadlight = $busFactory->createHeadlight();

        $this->assertInstanceOf(Headlight::class, $busHeadlight);
    }

    public function testCanCreateCarEngine()
    {
        $carFactory = new CarFactory;
        $carEngine = $carFactory->createEngine();

        $this->assertInstanceOf(Engine::class, $carEngine);
    }

    public function testCanCreateCarHeadlight()
    {
        $carFactory = new CarFactory;
        $carHeadlight = $carFactory->createHeadlight();

        $this->assertInstanceOf(Headlight::class, $carHeadlight);
    }
}
