<?php

namespace PHPDesignPatterns\Creational\Builder;

class CarBuilder implements VehicleBuilder
{
    /**
     * Current vehicle.
     *
     * @var object
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
        $this->vehicle = new Car;
    }

    /**
     * Add engine.
     *
     * @param  void
     * @return void
     */
    public function addEngine()
    {
        $this->vehicle->installParts('carEngine', new Parts\Engine);
    }

    /**
     * Add Wheel.
     *
     * @param  void
     * @return void
     */
    public function addWheel()
    {
        $this->vehicle->installParts('carWheel', new Parts\Wheel);
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
