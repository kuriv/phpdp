<?php

namespace PHPDesignPatterns\Behavioral\NullObject;

class TextPrinter implements Printer
{
    /**
     * Print the input string.
     *
     * @param  string $string
     * @return void
     */
    public function print(string $string)
    {
        print $string;
    }
}
