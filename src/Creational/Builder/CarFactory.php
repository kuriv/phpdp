<?php

namespace Kuriv\PHPDesignPatterns\Creational\Builder;

class CarFactory implements VehicleFactory
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
        $this->vehicle = new Car();
    }

    /**
     * Install engine.
     *
     * @param  void
     * @return void
     */
    public function installEngine()
    {
        $this->vehicle->installParts('carEngine', new Engine());
    }

    /**
     * Install wheel.
     *
     * @param  void
     * @return void
     */
    public function installWheel()
    {
        $this->vehicle->installParts('carWheel1', new Wheel());
        $this->vehicle->installParts('carWheel2', new Wheel());
        $this->vehicle->installParts('carWheel3', new Wheel());
        $this->vehicle->installParts('carWheel4', new Wheel());
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
