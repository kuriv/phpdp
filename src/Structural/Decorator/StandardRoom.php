<?php

namespace PHPDesignPatterns\Structural\Decorator;

class StandardRoom implements Booking
{
    /**
     * Calculate the price of the current room.
     *
     * @param  void
     * @return int
     */
    public function calculatePrice(): int
    {
        return 100;
    }

    /**
     * Get the description of the current room.
     *
     * @param  void
     * @return string
     */
    public function getDescription(): string
    {
        return 'Standard room';
    }
}
