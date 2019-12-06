<?php

namespace PHPDesignPatterns\Structural\Flyweight;

class CharacterFlyweight implements Flyweight
{
    /**
     * Render some character.
     *
     * @param  string $character
     * @return string
     */
    public function render(string $character): string
    {
        return $character;
    }
}
