<?php

namespace PHPDesignPatterns\Behavioral\Memento;

class Memento
{
    /**
     * Store the state instance.
     *
     * @var State
     */
    private $state;

    /**
     * Store the state instance to the current instance.
     *
     * @param  State $state
     * @return void
     */
    public function __construct(State $state)
    {
        $this->state = $state;
    }

    /**
     * Get the state string.
     *
     * @param  void
     * @return State
     */
    public function getState(): State
    {
        return $this->state;
    }
}
