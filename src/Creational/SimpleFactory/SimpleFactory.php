<?php

namespace PHPDesignPatterns\Creational\SimpleFactory;

class SimpleFactory
{
    /**
     * Create bus.
     *
     * @param  void
     * @return Bus
     */
    public function createBus(): Bus
    {
        return new Bus;
    }

    /**
     * Create car.
     *
     * @param  void
     * @return Car
     */
    public function createCar(): Car
    {
        return new Car;
    }
}
