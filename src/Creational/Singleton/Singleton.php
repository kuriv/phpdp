<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Singleton;

final class Singleton
{
    /**
     * Store the current instance.
     *
     * @var self
     */
    private static $instance;

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
     * @param  void
     * @return self
     */
    public static function getInstance(): self
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}
