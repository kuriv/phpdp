<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\AbstractFactory;

abstract class Engine
{
    /**
     * Provide power for the vehicle.
     *
     * @param  void
     * @return void
     */
    abstract public function power();
}
