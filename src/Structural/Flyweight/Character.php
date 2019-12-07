<?php

namespace PHPDesignPatterns\Structural\Flyweight;

class Character implements Text
{
    /**
     * Store a character.
     *
     * @var string
     */
    private $character;

    /**
     * Store a character to the current instance.
     *
     * @param  string $character
     * @return void
     */
    public function __construct(string $character)
    {
        $this->character = $character;
    }

    /**
     * Render a character.
     *
     * @param  string $font
     * @return string
     */
    public function render(string $font): string
    {
        return sprintf('Character %s with font %s', $this->character, $font);
    }
}
