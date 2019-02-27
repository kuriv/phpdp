<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Builder;

class CarBuilder implements VehicleBuilder
{
    /**
     * Current vehicle.
     *
     * @var Car
     */
    private $car;

    /**
     * Create vehicle.
     *
     * @param  void
     * @return void
     */
    public function createVehicle()
    {
        $this->car = new Car;
    }

    /**
     * Add engine.
     *
     * @param  void
     * @return void
     */
    public function addEngine()
    {
        $this->car->installParts('carEngine', new Parts\Engine);
    }

    /**
     * Add headlight.
     *
     * @param  void
     * @return void
     */
    public function addHeadlight()
    {
        $this->car->installParts('carHeadlight', new Parts\Headlight);
    }

    /**
     * Get vehicle.
     *
     * @param  void
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}
