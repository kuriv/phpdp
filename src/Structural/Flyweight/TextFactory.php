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
    private $instances = [];

    /**
     * Get the specified instance.
     *
     * @param  string $text
     * @return Text
     */
    public function getInstance(string $text): Text
    {
        $this->instances[$text] ?? $this->instances[$text] = $this->createInstance($text);
        return $this->instances[$text];
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
