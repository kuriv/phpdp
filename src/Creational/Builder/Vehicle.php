<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Builder;

abstract class Vehicle
{
    /**
     * Current vehicle information.
     *
     * @var array
     */
    private $information = [];

    /**
     * Install parts for the vehicle.
     *
     * @param  string      $name
     * @param  Parts\Parts $parts
     * @return void
     */
    public function installParts(string $name, Parts\Parts $parts)
    {
        $this->information[$name] = $parts;
    }
}
