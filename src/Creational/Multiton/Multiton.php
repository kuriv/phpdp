<?php

namespace PHPDesignPatterns\Creational\Multiton;

final class Multiton
{
    /**
     * Store several instances.
     *
     * @var array
     */
    private static $instances = [];

    /**
     * Prevent the instance from being constructed.
     *
     * @param  void
     * @return void
     */
    private function __construct()
    {
    }

    /**
     * Prevent the instance from being cloned.
     *
     * @param  void
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * Prevent the instance from being unserialized.
     *
     * @param  void
     * @return void
     */
    private function __wakeup()
    {
    }

    /**
     * Gets the instance via lazy initialization.
     *
     * @param  string $instanceName
     * @return Multiton
     */
    public static function getInstance(string $instanceName): Multiton
    {
        if (!isset(static::$instances[$instanceName])) {
            static::$instances[$instanceName] = new static;
        }
        return static::$instances[$instanceName];
    }
}
