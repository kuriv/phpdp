<?php

namespace Kuriv\PHPDesignPatterns\Structural\Decorator;

class ExtraBed extends BookingDecorator
{
    /**
     * Calculate the price of the current room.
     *
     * @param  void
     * @return int
     */
    public function calculatePrice(): int
    {
        return $this->room->calculatePrice() + 100;
    }

    /**
     * Get the description of the current room.
     *
     * @param  void
     * @return string
     */
    public function getDescription(): string
    {
        return $this->room->getDescription() . ' with extra bed';
    }
}
