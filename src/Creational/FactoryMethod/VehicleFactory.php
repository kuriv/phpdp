<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\FactoryMethod;

abstract class VehicleFactory
{
    /**
     * Create vehicle.
     *
     * @param  void
     * @return Vehicle
     */
    abstract public function createVehicle(): Vehicle;
}
