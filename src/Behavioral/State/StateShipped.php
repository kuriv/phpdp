<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\State;

class StateShipped implements State
{
    /**
     * Proceed to the next state.
     *
     * @param  Order  $order
     * @return void
     */
    public function proceed(Order $order)
    {
        $order->setState(new StateDone());
    }

    /**
     * Get the current state.
     *
     * @param  void
     * @return string
     */
    public function getState(): string
    {
        return 'StateShipped';
    }
}
