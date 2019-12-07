<?php

namespace PHPDesignPatterns\Structural\Decorator;

use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testCanCalculatePriceForBasicStandardRoomBooking()
    {
        $booking = new StandardRoom;
        $this->assertSame(100, $booking->calculatePrice());
        $this->assertSame('Standard room', $booking->getDescription());
    }

    public function testCanCalculatePriceForStandardRoomBookingWithWiFi()
    {
        $booking = new WiFi(new StandardRoom);
        $this->assertSame(150, $booking->calculatePrice());
        $this->assertSame('Standard room with wifi', $booking->getDescription());
    }

    public function testCanCalculatePriceForStandardRoomBookingWithWiFiAndExtraBed()
    {
        $booking = new WiFi(new StandardRoom);
        $booking = new ExtraBed($booking);
        $this->assertSame(250, $booking->calculatePrice());
        $this->assertSame('Standard room with wifi with extra bed', $booking->getDescription());
    }
}
