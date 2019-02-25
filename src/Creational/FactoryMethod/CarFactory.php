<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\FactoryMethod;

class CarFactory extends VehicleFactory
{
    /**
     * Create vehicle.
     *
     * @param  void
     * @return Vehicle
     */
    public function createVehicle(): Vehicle
    {
        return new Car;
    }
}
