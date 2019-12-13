<?php

namespace Kuriv\PHPDesignPatterns\Structural\Facade;

interface BIOS
{
    /**
     * Just a test method.
     *
     * @param  void
     * @return void
     */
    public function powerOn();

    /**
     * Just a test method.
     *
     * @param  OS     $os
     * @return void
     */
    public function launch(OS $os);

    /**
     * Just a test method.
     *
     * @param  void
     * @return void
     */
    public function powerOff();
}
