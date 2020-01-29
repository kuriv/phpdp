<?php

namespace Kuriv\PHPDesignPatterns\Structural\Decorator;

abstract class BookingDecorator implements Booking
{
    /**
     * Store the booking instance.
     *
     * @var Booking
     */
    protected Booking $room;

    /**
     * Store the booking instance to the current instance.
     *
     * @param  Booking $room
     * @return void
     */
    public function __construct(Booking $room)
    {
        $this->room = $room;
    }
}
