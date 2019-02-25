<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Structural\Bridge;

abstract class Printer
{
    /**
     * Instance that used for bridging.
     *
     * @var Formatter
     */
    protected $printer;

    /**
     * Save the instance that used for bridging.
     *
     * @param  Formatter $printer
     * @return void
     */
    public function __construct(Formatter $printer)
    {
        $this->printer = $printer;
    }

    /**
     * Print string.
     *
     * @param  void
     * @return string
     */
    abstract public function print(): string;
}
