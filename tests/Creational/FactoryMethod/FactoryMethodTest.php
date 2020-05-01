<?php

namespace Kuriv\PHPDesignPatterns\Creational\FactoryMethod;

use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateBus()
    {
        $busFactory = new BusFactory();
        $bus = $busFactory->createVehicle();
        $this->assertInstanceOf(Bus::class, $bus);
    }

    public function testCanCreateCar()
    {
        $carFactory = new CarFactory();
        $car = $carFactory->createVehicle();
        $this->assertInstanceOf(Car::class, $car);
    }
}
