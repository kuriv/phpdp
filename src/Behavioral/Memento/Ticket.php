<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Memento;

class Ticket
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
     * @param  void
     * @return void
     */
    public function __construct()
    {
        $this->state = new State(State::STATE_CREATED);
    }

    /**
     * Set the new state instance.
     *
     * @param  void
     * @return void
     */
    public function open()
    {
        $this->state = new State(State::STATE_OPENED);
    }

    /**
     * Set the new state instance.
     *
     * @param  void
     * @return void
     */
    public function assign()
    {
        $this->state = new State(State::STATE_ASSIGNED);
    }

    /**
     * Set the new state instance.
     *
     * @param  void
     * @return void
     */
    public function close()
    {
        $this->state = new State(State::STATE_CLOSED);
    }

    /**
     * Save the state instance to the memento instance.
     *
     * @param  void
     * @return Memento
     */
    public function saveToMemento(): Memento
    {
        return new Memento(clone $this->state);
    }

    /**
     * Restore the state instance from the memento instance.
     *
     * @param  Memento $memento
     * @return void
     */
    public function restoreFromMemento(Memento $memento)
    {
        $this->state = $memento->getState();
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
