<?php

namespace PHPDesignPatterns\Behavioral\NullObject;

class NullPrinter implements Printer
{
    /**
     * Print nothing.
     *
     * @param  string $string
     * @return void
     */
    public function print(string $string)
    {
    }
}
