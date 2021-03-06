<?php

namespace Kuriv\PHPDesignPatterns\Structural\Bridge;

class HTMLFormatter implements Formatter
{
    /**
     * Format the string.
     *
     * @param  string $string
     * @return string
     */
    public function format(string $string): string
    {
        return sprintf('<p>%s</p>', $string);
    }
}
