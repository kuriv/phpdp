<?php

namespace Kuriv\PHPDesignPatterns\More\EAV;

class Entity
{
    /**
     * Store the entity name.
     *
     * @var string
     */
    private $name;

    /**
     * Store several instances.
     *
     * @var array
     */
    private $instances = [];

    /**
     * Store the entity name and several instances to the current instance.
     *
     * @param  string $name
     * @param  array  $instances
     * @return void
     */
    public function __construct(string $name, array $instances)
    {
        $this->name = $name;
        foreach ($instances as $instance) {
            $this->instances[] = $instance;
        }
    }

    /**
     * Return the string containing all information.
     *
     * @param  void
     * @return string
     */
    public function __toString(): string
    {
        $string[] = $this->name;
        foreach ($this->instances as $instance) {
            $string[] = (string) $instance;
        }
        return implode(', ', $string);
    }
}
