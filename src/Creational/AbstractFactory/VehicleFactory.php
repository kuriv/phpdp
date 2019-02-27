<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\AbstractFactory;

abstract class VehicleFactory
{
    /**
     * Create engine.
     *
     * @param  void
     * @return Engine
     */
    abstract public function createEngine(): Engine;

    /**
     * Create headlight.
     *
     * @param  void
     * @return Headlight
     */
    abstract public function createHeadlight(): Headlight;
}
