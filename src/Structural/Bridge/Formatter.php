<?php

namespace PHPDesignPatterns\Structural\Bridge;

interface Formatter
{
    /**
     * Format the string.
     *
     * @param  string $string
     * @return string
     */
    public function format(string $string): string;
}
