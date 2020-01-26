<?php

namespace Kuriv\PHPDesignPatterns\More\EAV;

class Attribute
{
    /**
     * Store the attribute name.
     *
     * @var string
     */
    private string $name;

    /**
     * Store the attribute name to the current instance.
     *
     * @param  string $name
     * @return void
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Return the attribute name.
     *
     * @param  void
     * @return string
     */
    public function __toString(): string
    {
        return $this->name;
    }
}
