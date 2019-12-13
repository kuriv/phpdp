<?php

namespace Kuriv\PHPDesignPatterns\Structural\Bridge;

class PingTestPrinter extends Printer
{
    /**
     * Print the string.
     *
     * @param  void
     * @return string
     */
    public function print(): string
    {
        return $this->formatter->format('Ping Test');
    }
}
