<?php

namespace PHPDesignPatterns\Structural\Bridge;

class TextFormatter implements Formatter
{
    /**
     * Format the input string.
     *
     * @param  string $string
     * @return string
     */
    public function format(string $string): string
    {
        return $string;
    }
}
