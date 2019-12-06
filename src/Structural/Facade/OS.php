<?php

namespace PHPDesignPatterns\Structural\Facade;

interface OS
{
    /**
     * Define the OS method.
     *
     * @param  void
     * @return void
     */
    public function shutdown();

    /**
     * Define the OS method.
     *
     * @param  void
     * @return void
     */
    public function login();
}
