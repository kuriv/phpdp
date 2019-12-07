<?php

namespace PHPDesignPatterns\Structural\Decorator;

class WiFi extends BookingDecorator
{
    /**
     * Calculate the price of the current room.
     *
     * @param  void
     * @return int
     */
    public function calculatePrice(): int
    {
        return $this->room->calculatePrice() + 50;
    }

    /**
     * Get the description of the current room.
     *
     * @param  void
     * @return string
     */
    public function getDescription(): string
    {
        return $this->room->getDescription() . ' with wifi';
    }
}
