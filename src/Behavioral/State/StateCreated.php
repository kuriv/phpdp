<?php

namespace PHPDesignPatterns\Behavioral\State;

class StateCreated implements State
{
    /**
     * Proceed to the next state.
     *
     * @param  Order  $order
     * @return void
     */
    public function proceed(Order $order)
    {
        $order->setState(new StateShipped);
    }

    /**
     * Get the current state.
     *
     * @param  void
     * @return string
     */
    public function getState(): string
    {
        return 'StateCreated';
    }
}
