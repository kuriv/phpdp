<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\AbstractFactory;

abstract class Headlight
{
    /**
     * Provide light for the vehicle.
     *
     * @param  void
     * @return void
     */
    abstract public function light();
}
