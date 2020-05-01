<?php

namespace Kuriv\PHPDesignPatterns\Creational\Singleton;

final class Singleton
{
    /**
     * Store the current instance.
     *
     * @var Singleton
     */
    private static Singleton $instance;

    /**
     * Prevent the instance from being constructed.
     *
     * @param  void
     * @return void
     */
    private function __construct()
    {
        //
    }

    /**
     * Prevent the instance from being cloned.
     *
     * @param  void
     * @return void
     */
    private function __clone()
    {
        //
    }

    /**
     * Prevent the instance from being unserialized.
     *
     * @param  void
     * @return void
     */
    private function __wakeup()
    {
        //
    }

    /**
     * Get the instance via lazy initialization.
     *
     * @param  void
     * @return Singleton
     */
    public static function getInstance(): Singleton
    {
        return static::$instance ??= new static;
    }
}
