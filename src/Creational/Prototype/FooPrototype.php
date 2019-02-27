<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Prototype;

class FooPrototype extends Prototype
{
    /**
     * Do something when the instance being cloned.
     *
     * @param  void
     * @return void
     */
    public function __clone()
    {
    }
}
