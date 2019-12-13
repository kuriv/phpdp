<?php

namespace Kuriv\PHPDesignPatterns\Creational\FactoryMethod;

interface VehicleFactory
{
    /**
     * Create vehicle.
     *
     * @param  void
     * @return Vehicle
     */
    public function createVehicle(): Vehicle;
}
