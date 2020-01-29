<?php

namespace Kuriv\PHPDesignPatterns\Structural\Flyweight;

use Countable;

class TextFactory implements Countable
{
    /**
     * Store several instances.
     *
     * @var array
     */
    private array $instances = [];

    /**
     * Get the specified instance.
     *
     * @param  string $text
     * @return Text
     */
    public function getInstance(string $text): Text
    {
        return $this->instances[$text] ??= $this->createInstance($text);
    }

    /**
     * Create the specified instance.
     *
     * @param  string $text
     * @return Text
     */
    private function createInstance(string $text): Text
    {
        return strlen($text) == 1 ? new Character($text) : new Word($text);
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
