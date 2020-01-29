<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\NullObject;

class Service
{
    /**
     * Store the printer instance.
     *
     * @var Printer
     */
    private Printer $printer;

    /**
     * Store the printer instance to the current instance.
     *
     * @param  Printer $printer
     * @return void
     */
    public function __construct(Printer $printer)
    {
        $this->printer = $printer;
    }

    /**
     * Print something here.
     *
     * @param  void
     * @return void
     */
    public function print()
    {
        $this->printer->print('You are now in ' . __METHOD__);
    }
}
