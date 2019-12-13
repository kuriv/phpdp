<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\NullObject;

class TextPrinter implements Printer
{
    /**
     * Print the string.
     *
     * @param  string $string
     * @return void
     */
    public function print(string $string)
    {
        print $string;
    }
}
