<?php

namespace PHPDesignPatterns\More\EAV;

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
    private $values = [];

    /**
     * Store the entity name and several instances to the current instance.
     *
     * @param  string $name
     * @param  array  $values
     * @return void
     */
    public function __construct(string $name, array $values)
    {
        $this->name = $name;
        foreach ($values as $value) {
            $this->values[] = $value;
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
        foreach ($this->values as $value) {
            $string[] = (string) $value;
        }
        return implode(', ', $string);
    }
}
