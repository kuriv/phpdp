<?php

namespace PHPDesignPatterns\Creational\AbstractFactory;

class BusFactory implements VehicleFactory
{
    /**
     * Create engine.
     *
     * @param  void
     * @return Engine
     */
    public function createEngine(): Engine
    {
        return new BusEngine;
    }

    /**
     * Create wheel.
     *
     * @param  void
     * @return Wheel
     */
    public function createWheel(): Wheel
    {
        return new BusWheel;
    }
}
