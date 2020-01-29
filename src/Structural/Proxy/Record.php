<?php

namespace Kuriv\PHPDesignPatterns\Structural\Proxy;

use InvalidArgumentException;

class Record
{
    /**
     * Store some data here.
     *
     * @var array
     */
    private array $data = [];

    /**
     * Store some data to the current instance.
     *
     * @param  array $data
     * @return void
     */
    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * Set the value of the specified name.
     *
     * @param  string $name
     * @param  string $value
     * @return void
     */
    public function __set(string $name, string $value)
    {
        $this->data[$name] = $value;
    }

    /**
     * Get the value of the specified name.
     *
     * @param  string $name
     * @return string
     */
    public function __get(string $name): string
    {
        if (!isset($this->data[$name])) {
            throw new InvalidArgumentException('Invalid name given');
        }
        return $this->data[$name];
    }
}
