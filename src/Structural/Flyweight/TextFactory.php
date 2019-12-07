<?php

namespace PHPDesignPatterns\Structural\Flyweight;

use Countable;

class TextFactory implements Countable
{
    /**
     * Store several instances.
     *
     * @var array
     */
    private $instances = [];

    /**
     * Get the specified instance.
     *
     * @param  string $string
     * @return Text
     */
    public function getInstance(string $string): Text
    {
        $this->instances[$string] ?? $this->instances[$string] = $this->createInstance($string);
        return $this->instances[$string];
    }

    /**
     * Create the specified instance.
     *
     * @param  string $string
     * @return Text
     */
    private function createInstance(string $string): Text
    {
        return strlen($string) == 1 ? new Character($string) : new Word($string);
    }

    /**
     * Count the total number of instances.
     *
     * @param  void
     * @return int
     */
    public function count(): int
    {
        return count($this->instances);
    }
}
