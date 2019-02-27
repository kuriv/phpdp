<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Builder;

use PHPUnit\Framework\TestCase;
use PHPDesignPatterns\Creational\Builder\BusBuilder;
use PHPDesignPatterns\Creational\Builder\Bus;
use PHPDesignPatterns\Creational\Builder\CarBuilder;
use PHPDesignPatterns\Creational\Builder\Car;
use PHPDesignPatterns\Creational\Builder\Builder;

class BuilderTest extends TestCase
{
    public function testCanBuildBus()
    {
        $busBuilder = new BusBuilder;
        $bus = (new Builder)->build($busBuilder);

        $this->assertInstanceOf(Bus::class, $bus);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder;
        $car = (new Builder)->build($carBuilder);

        $this->assertInstanceOf(Car::class, $car);
    }
}
