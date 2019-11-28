<?php

namespace PHPDesignPatterns\Creational\Builder;

abstract class Vehicle
{
    /**
     * Current vehicle parts.
     *
     * @var array
     */
    private $parts = [];

    /**
     * Install parts for the vehicle.
     *
     * @param  string      $name
     * @param  Parts\Parts $parts
     * @return void
     */
    public function installParts(string $name, Parts\Parts $parts)
    {
        $this->parts[$name] = $parts;
    }
}
