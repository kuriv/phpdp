<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\AbstractFactory;

class BusFactory extends VehicleFactory
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
     * Create headlight.
     *
     * @param  void
     * @return Headlight
     */
    public function createHeadlight(): Headlight
    {
        return new BusHeadlight;
    }
}
