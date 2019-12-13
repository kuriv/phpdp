<?php

namespace Kuriv\PHPDesignPatterns\Creational\SimpleFactory;

use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateBus()
    {
        $bus = (new SimpleFactory)->createVehicle('Bus');
        $this->assertInstanceOf(Bus::class, $bus);
    }

    public function testCanCreateCar()
    {
        $car = (new SimpleFactory)->createVehicle('Car');
        $this->assertInstanceOf(Car::class, $car);
    }
}
