<?php

namespace PHPDesignPatterns\Structural\Flyweight;

interface Flyweight
{
    /**
     * Render some character.
     *
     * @param  string $character
     * @return string
     */
    public function render(string $character): string;
}
