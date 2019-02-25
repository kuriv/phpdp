<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\AbstractFactory;

class CarFactory extends VehicleFactory
{
    /**
     * Create vehicle.
     *
     * @param  void
     * @return Engine
     */
    public function createEngine(): Engine
    {
        return new CarEngine;
    }

    /**
     * Create headlight.
     *
     * @param  void
     * @return Headlight
     */
    public function createHeadlight(): Headlight
    {
        return new CarHeadlight;
    }
}
