<?php

namespace PHPDesignPatterns\Behavioral\TemplateMethod;

abstract class Daily
{
    /**
     * Things that need to do.
     *
     * @var array
     */
    private $things = [];

    final public function process()
    {
        // $this->things[] =
    }

    protected function wakeup()
    {
    }

    // protected function eat()
    // {
    // }

    // protected function work()
    // {
    // }

    /**
     * Date with girlfriend.
     *
     * @param  void
     * @return string
     */
    abstract protected function date(): string;

    // protected function

    /**
     * Go to sleep.
     *
     * @param  void
     * @return string
     */
    protected function sleep(): string
    {
        return 'Go to sleep';
    }

    /**
     * Get all the things that need to do.
     *
     * @param  void
     * @return array
     */
    public function getThings(): array
    {
        return $this->things;
    }
}
