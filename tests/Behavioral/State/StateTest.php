<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\State;

use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    public function testIsCreatedWithStateCreated()
    {
        $order = Order::createOrder();
        $this->assertSame('StateCreated', $order->getState());
    }

    public function testCanProceedToStateShipped()
    {
        $order = Order::createOrder();
        $order->proceed();
        $this->assertSame('StateShipped', $order->getState());
    }

    public function testCanProceedToStateDone()
    {
        $order = Order::createOrder();
        $order->proceed();
        $order->proceed();
        $this->assertSame('StateDone', $order->getState());
    }

    public function testStateDoneIsTheLastPossibleState()
    {
        $order = Order::createOrder();
        $order->proceed();
        $order->proceed();
        $order->proceed();
        $this->assertSame('StateDone', $order->getState());
    }
}
