<?php

namespace PHPDesignPatterns\More\EAV;

class Value
{
    /**
     * Store the attribute instance.
     *
     * @var Attribute
     */
    private $attribute;

    /**
     * Store the value string.
     *
     * @var string
     */
    private $value;

    /**
     * Store the attribute instance and value string to the current instance.
     *
     * @param  Attribute $attribute
     * @param  string    $value
     * @return void
     */
    public function __construct(Attribute $attribute, string $value)
    {
        $this->attribute = $attribute;
        $this->value = $value;
    }

    /**
     * Return the formatted string.
     *
     * @param  void
     * @return string
     */
    public function __toString(): string
    {
        return sprintf('%s: %s', (string) $this->attribute, $this->value);
    }
}
