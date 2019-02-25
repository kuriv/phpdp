<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\FactoryMethod;

abstract class Vehicle
{
    /**
     * Drive to the destination.
     *
     * @param  string $destination
     * @return void
     */
    abstract public function drive(string $destination);
}
