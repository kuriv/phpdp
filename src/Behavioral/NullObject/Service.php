<?php

namespace PHPDesignPatterns\Behavioral\NullObject;

class Service
{
    /**
     * Store the printer instance.
     *
     * @var Printer
     */
    private $printer;

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
     * Test something here.
     *
     * @param  void
     * @return void
     */
    public function test()
    {
        $this->printer->print('You are now in ' . __METHOD__);
    }
}
