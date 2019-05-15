<?php

namespace PHPDesignPatterns\Creational\StaticFactory;

class StaticFactory
{
    /**
     * Create bus.
     *
     * @param  void
     * @return Bus
     */
    public static function createBus(): Bus
    {
        return new Bus;
    }

    /**
     * Create car.
     *
     * @param  void
     * @return Car
     */
    public static function createCar(): Car
    {
        return new Car;
    }
}
