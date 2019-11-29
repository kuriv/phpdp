<?php

namespace PHPDesignPatterns\Creational\SimpleFactory;

use PHPUnit\Framework\TestCase;
use PHPDesignPatterns\Creational\SimpleFactory\SimpleFactory;
use PHPDesignPatterns\Creational\SimpleFactory\Bus;
use PHPDesignPatterns\Creational\SimpleFactory\Car;

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
