<?php

namespace Kuriv\PHPDesignPatterns\Creational\Builder;

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
     * @param  string $name
     * @param  Parts  $parts
     * @return void
     */
    public function installParts(string $name, Parts $parts)
    {
        $this->parts[$name] = $parts;
    }
}
