<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Structural\Bridge;

class HtmlFormatter implements Formatter
{
    /**
     * Format the input string.
     *
     * @param  string $string
     * @return string
     */
    public function format(string $string): string
    {
        return sprintf('<p>%s</p>', $string);
    }
}
