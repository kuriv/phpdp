<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Builder;

class BusBuilder implements VehicleBuilder
{
    /**
     * Current vehicle.
     *
     * @var Bus
     */
    private $bus;

    /**
     * Create vehicle.
     *
     * @param  void
     * @return void
     */
    public function createVehicle()
    {
        $this->bus = new Bus;
    }

    /**
     * Add engine.
     *
     * @param  void
     * @return void
     */
    public function addEngine()
    {
        $this->bus->installParts('busEngine', new Parts\Engine);
    }

    /**
     * Add headlight.
     *
     * @param  void
     * @return void
     */
    public function addHeadlight()
    {
        $this->bus->installParts('busHeadlight', new Parts\Headlight);
    }

    /**
     * Get vehicle.
     *
     * @param  void
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->bus;
    }
}
