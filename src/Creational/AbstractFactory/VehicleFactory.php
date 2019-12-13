<?php

namespace Kuriv\PHPDesignPatterns\Creational\AbstractFactory;

interface VehicleFactory
{
    /**
     * Create engine.
     *
     * @param  void
     * @return Engine
     */
    public function createEngine(): Engine;

    /**
     * Create wheel.
     *
     * @param  void
     * @return Wheel
     */
    public function createWheel(): Wheel;
}
