<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Mediator;

abstract class Colleague
{
    /**
     * Store the mediator instance.
     *
     * @var Mediator
     */
    protected Mediator $mediator;

    /**
     * Store the mediator instance to the current instance.
     *
     * @param  Mediator $mediator
     * @return void
     */
    public function setMediator(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }
}
