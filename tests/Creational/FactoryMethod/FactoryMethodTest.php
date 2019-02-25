<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\FactoryMethod;

use PHPUnit\Framework\TestCase;
use PHPDesignPatterns\Creational\FactoryMethod\BusFactory;
use PHPDesignPatterns\Creational\FactoryMethod\Bus;
use PHPDesignPatterns\Creational\FactoryMethod\CarFactory;
use PHPDesignPatterns\Creational\FactoryMethod\Car;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateBus()
    {
        $busFactory = new BusFactory;
        $bus = $busFactory->createVehicle();

        $this->assertInstanceOf(Bus::class, $bus);
    }

    public function testCanCreateCar()
    {
        $carFactory = new CarFactory;
        $car = $carFactory->createVehicle();

        $this->assertInstanceOf(Car::class, $car);
    }
}
