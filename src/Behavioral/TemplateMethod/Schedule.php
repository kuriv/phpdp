<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\TemplateMethod;

abstract class Schedule
{
    /**
     * Daily schedule.
     *
     * @var array
     */
    private array $schedule = [];

    /**
     * Go to work.
     *
     * @param  void
     * @return string
     */
    protected function work(): string
    {
        return 'Go to work';
    }

    /**
     * Date with girlfriend.
     *
     * @param  void
     * @return string
     */
    abstract protected function date(): string;

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
     * Get all the things done.
     *
     * @param  void
     * @return void
     */
    final public function process()
    {
        $this->schedule = [$this->work(), $this->date(), $this->sleep()];
    }

    /**
     * Get daily schedule.
     *
     * @param  void
     * @return array
     */
    public function getSchedule(): array
    {
        return $this->schedule;
    }
}
