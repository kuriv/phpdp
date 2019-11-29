<?php

namespace PHPDesignPatterns\Creational\Builder;

use PHPUnit\Framework\TestCase;
use PHPDesignPatterns\Creational\Builder\BusFactory;
use PHPDesignPatterns\Creational\Builder\CarFactory;
use PHPDesignPatterns\Creational\Builder\Builder;
use PHPDesignPatterns\Creational\Builder\Bus;
use PHPDesignPatterns\Creational\Builder\Car;

class BuilderTest extends TestCase
{
    public function testCanBuildBus()
    {
        $busFactory = new BusFactory;
        $bus = (new Builder)->build($busFactory);
        $this->assertInstanceOf(Bus::class, $bus);
    }

    public function testCanBuildCar()
    {
        $carFactory = new CarFactory;
        $car = (new Builder)->build($carFactory);
        $this->assertInstanceOf(Car::class, $car);
    }
}
