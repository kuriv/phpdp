<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\StaticFactory;

class StaticFactory
{
    /**
     * Create vehicle.
     *
     * @param  string $vehicle
     * @return Vehicle
     */
    public static function createVehicle(string $vehicle): Vehicle
    {
        if ($vehicle == 'Bus') {
            return new Bus;
        }
        if ($vehicle == 'Car') {
            return new Car;
        }
    }
}
