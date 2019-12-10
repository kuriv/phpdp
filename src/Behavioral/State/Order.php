<?php

namespace PHPDesignPatterns\Behavioral\State;

class Order
{
    /**
     * Store the state instance.
     *
     * @var State
     */
    private $state;

    /**
     * Create an order.
     *
     * @param  void
     * @return Order
     */
    public static function createOrder(): Order
    {
        $order = new self;
        $order->setState(new StateCreated);
        return $order;
    }

    /**
     * Set the new state instance.
     *
     * @param  State $state
     * @return void
     */
    public function setState(State $state)
    {
        $this->state = $state;
    }

    /**
     * Get the current state.
     *
     * @param  void
     * @return string
     */
    public function getState(): string
    {
        return $this->state->getState();
    }

    /**
     * Proceed to the next state.
     *
     * @param  void
     * @return void
     */
    public function proceed()
    {
        $this->state->proceed($this);
    }
}