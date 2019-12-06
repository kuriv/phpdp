<?php

namespace PHPDesignPatterns\Behavioral\NullObject;

interface Printer
{
    /**
     * Print the string.
     *
     * @param  string $string
     * @return void
     */
    public function print(string $string);
}
