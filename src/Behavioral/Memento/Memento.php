<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Memento;

class Memento
{
    /**
     * Store the state instance.
     *
     * @var State
     */
    private State $state;

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
     * Get the state instance.
     *
     * @param  void
     * @return State
     */
    public function getState(): State
    {
        return $this->state;
    }
}
