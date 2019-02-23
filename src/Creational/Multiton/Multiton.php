<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Multiton;

final class Multiton
{
    /**
     * Storing different instances.
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
     * @return self
     */
    public static function getInstance(string $instanceName): self
    {
        if (!isset(self::$instances[$instanceName])) {
            self::$instances[$instanceName] = new self;
        }
        return self::$instances[$instanceName];
    }
}
