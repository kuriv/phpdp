<?php

namespace Kuriv\PHPDesignPatterns\Structural\Decorator;

interface Booking
{
    /**
     * Calculate the price of the current room.
     *
     * @param  void
     * @return int
     */
    public function calculatePrice(): int;

    /**
     * Get the description of the current room.
     *
     * @param  void
     * @return string
     */
    public function getDescription(): string;
}
