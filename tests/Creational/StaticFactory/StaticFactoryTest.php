<?php

namespace Kuriv\PHPDesignPatterns\Creational\StaticFactory;

use PHPUnit\Framework\TestCase;

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
