<?php

namespace Kuriv\PHPDesignPatterns\Creational\SimpleFactory;

class SimpleFactory
{
    /**
     * Create vehicle.
     *
     * @param  string $name
     * @return Vehicle
     */
    public function createVehicle(string $name): Vehicle
    {
        if ($name == 'Bus') {
            return new Bus();
        }
        if ($name == 'Car') {
            return new Car();
        }
    }
}
