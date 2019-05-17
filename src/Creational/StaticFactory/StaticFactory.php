<?php

namespace PHPDesignPatterns\Creational\StaticFactory;

class StaticFactory
{
    /**
     * Create vehicle.
     *
     * @param  string $name
     * @return Vehicle
     */
    public static function createVehicle(string $name): Vehicle
    {
        if ($name == 'Bus') {
            return new Bus;
        }
        if ($name == 'Car') {
            return new Car;
        }
    }
}
