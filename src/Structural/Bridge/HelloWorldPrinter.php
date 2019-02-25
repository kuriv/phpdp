<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Structural\Bridge;

class HelloWorldPrinter extends Printer
{
    /**
     * Print string.
     *
     * @param  void
     * @return string
     */
    public function print(): string
    {
        return $this->printer->format('Hello World');
    }
}
