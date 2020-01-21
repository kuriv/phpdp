<?php

namespace Kuriv\PHPDesignPatterns\Creational\Builder;

use PHPUnit\Framework\TestCase;

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
