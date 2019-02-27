<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Builder;

interface VehicleBuilder
{
    /**
     * Create vehicle.
     *
     * @param  void
     * @return void
     */
    public function createVehicle();

    /**
     * Add engine.
     *
     * @param  void
     * @return void
     */
    public function addEngine();

    /**
     * Add headlight.
     *
     * @param  void
     * @return void
     */
    public function addHeadlight();

    /**
     * Get vehicle.
     *
     * @param  void
     * @return Vehicle
     */
    public function getVehicle(): Vehicle;
}
