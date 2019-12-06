<?php

namespace PHPDesignPatterns\Structural\Facade;

interface BIOS
{
    /**
     * Define the BIOS method.
     *
     * @param  void
     * @return void
     */
    public function powerOn();

    /**
     * Define the BIOS method.
     *
     * @param  OS     $os
     * @return void
     */
    public function launch(OS $os);

    /**
     * Define the BIOS method.
     *
     * @param  void
     * @return void
     */
    public function powerOff();
}
