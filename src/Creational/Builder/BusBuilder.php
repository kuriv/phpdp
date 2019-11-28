<?php

namespace PHPDesignPatterns\Creational\Builder;

class BusBuilder implements VehicleBuilder
{
    /**
     * Current vehicle.
     *
     * @var Vehicle
     */
    private $vehicle;

    /**
     * Create vehicle.
     *
     * @param  void
     * @return void
     */
    public function createVehicle()
    {
        $this->vehicle = new Bus;
    }

    /**
     * Install engine.
     *
     * @param  void
     * @return void
     */
    public function installEngine()
    {
        $this->vehicle->installParts('busEngine', new Engine);
    }

    /**
     * Install wheel.
     *
     * @param  void
     * @return void
     */
    public function installWheel()
    {
        $this->vehicle->installParts('busWheel', new Wheel);
    }

    /**
     * Get vehicle.
     *
     * @param  void
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->vehicle;
    }
}
