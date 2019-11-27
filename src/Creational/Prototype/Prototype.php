<?php

namespace PHPDesignPatterns\Creational\Prototype;

abstract class Prototype
{
    /**
     * Do something when the instance being cloned.
     *
     * @param  void
     * @return void
     */
    abstract protected function __clone();
}
