<?php

namespace Kuriv\PHPDesignPatterns\Creational\Builder;

class BusFactory implements VehicleFactory
{
    /**
     * Current vehicle.
     *
     * @var Vehicle
     */
    private Vehicle $vehicle;

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
        $this->vehicle->installParts('busWheel1', new Wheel);
        $this->vehicle->installParts('busWheel2', new Wheel);
        $this->vehicle->installParts('busWheel3', new Wheel);
        $this->vehicle->installParts('busWheel4', new Wheel);
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
