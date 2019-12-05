<?php

namespace PHPDesignPatterns\Behavioral\NullObject;

interface Printer
{
    /**
     * Print the input string.
     *
     * @param  string $string
     * @return void
     */
    public function print(string $string);
}
