<?php

namespace PHPDesignPatterns\Structural\Bridge;

abstract class Printer
{
    /**
     * Instance that used for bridging.
     *
     * @var Formatter
     */
    protected $formatter;

    /**
     * Store the instance that used for bridging.
     *
     * @param  Formatter $formatter
     * @return void
     */
    public function __construct(Formatter $formatter)
    {
        $this->formatter = $formatter;
    }

    /**
     * Print the string.
     *
     * @param  void
     * @return string
     */
    abstract protected function print(): string;
}
