<?php

namespace Kuriv\PHPDesignPatterns\Structural\Facade;

class Facade
{
    /**
     * Store the BIOS instance.
     *
     * @var BIOS
     */
    private $bios;

    /**
     * Store the OS instance.
     *
     * @var OS
     */
    private $os;

    /**
     * Store the BIOS instance and OS instance to the current instance.
     *
     * @param  BIOS $bios
     * @param  OS   $os
     * @return void
     */
    public function __construct(BIOS $bios, OS $os)
    {
        $this->bios = $bios;
        $this->os = $os;
    }

    /**
     * Build system turn on method.
     *
     * @param  void
     * @return void
     */
    public function turnOn()
    {
        $this->bios->powerOn();
        $this->bios->launch($this->os);
    }

    /**
     * Build system turn off method.
     *
     * @param  void
     * @return void
     */
    public function turnOff()
    {
        $this->os->shutdown();
        $this->bios->powerOff();
    }
}
