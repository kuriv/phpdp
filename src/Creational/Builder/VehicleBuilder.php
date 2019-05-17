<?php

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
     * Add wheel.
     *
     * @param  void
     * @return void
     */
    public function addWheel();

    /**
     * Get vehicle.
     *
     * @param  void
     * @return Vehicle
     */
    public function getVehicle(): Vehicle;
}
