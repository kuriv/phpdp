<?php

namespace Kuriv\PHPDesignPatterns\Creational\AbstractFactory;

class CarFactory implements VehicleFactory
{
    /**
     * Create engine.
     *
     * @param  void
     * @return Engine
     */
    public function createEngine(): Engine
    {
        return new CarEngine;
    }

    /**
     * Create wheel.
     *
     * @param  void
     * @return Wheel
     */
    public function createWheel(): Wheel
    {
        return new CarWheel;
    }
}
