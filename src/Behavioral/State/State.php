<?php

namespace PHPDesignPatterns\Behavioral\State;

interface State
{
    /**
     * Proceed to the next state.
     *
     * @param  Order  $order
     * @return void
     */
    public function proceed(Order $order);

    /**
     * Get the current state.
     *
     * @param  void
     * @return string
     */
    public function getState(): string;
}
