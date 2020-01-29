<?php

namespace Kuriv\PHPDesignPatterns\Structural\Flyweight;

interface Text
{
    /**
     * Render a piece of text.
     *
     * @param  string $font
     * @return string
     */
    public function render(string $font): string;
}
