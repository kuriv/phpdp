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
     * Install engine.
     *
     * @param  void
     * @return void
     */
    public function installEngine();

    /**
     * Install wheel.
     *
     * @param  void
     * @return void
     */
    public function installWheel();

    /**
     * Get vehicle.
     *
     * @param  void
     * @return Vehicle
     */
    public function getVehicle(): Vehicle;
}
