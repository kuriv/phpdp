<?php

namespace Kuriv\PHPDesignPatterns\Creational\FactoryMethod;

class BusFactory implements VehicleFactory
{
    /**
     * Create vehicle.
     *
     * @param  void
     * @return Vehicle
     */
    public function createVehicle(): Vehicle
    {
        return new Bus();
    }
}
