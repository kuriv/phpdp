<?php

namespace PHPDesignPatterns\Creational\StaticFactory;

use PHPUnit\Framework\TestCase;
use PHPDesignPatterns\Creational\StaticFactory\StaticFactory;
use PHPDesignPatterns\Creational\StaticFactory\Bus;
use PHPDesignPatterns\Creational\StaticFactory\Car;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateBus()
    {
        $bus = StaticFactory::createVehicle('Bus');
        $this->assertInstanceOf(Bus::class, $bus);
    }

    public function testCanCreateCar()
    {
        $car = StaticFactory::createVehicle('Car');
        $this->assertInstanceOf(Car::class, $car);
    }
}
