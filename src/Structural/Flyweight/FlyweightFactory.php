<?php

namespace PHPDesignPatterns\Structural\Flyweight;

use Countable;

class FlyweightFactory implements Countable
{
    private $pool = [];

    public function get(): CharacterFlyweight
    {
    }

    /**
     * Count the total number of threads.
     *
     * @param  void
     * @return int
     */
    public function count(): int
    {
        return count($this->pool);
    }
}
