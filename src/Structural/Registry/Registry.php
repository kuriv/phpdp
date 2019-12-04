<?php

namespace PHPDesignPatterns\Structural\Registry;

use InvalidArgumentException;

abstract class Registry
{
    /**
     * Define an array of allowed keys.
     *
     * @var array
     */
    private static $allowedKeys = ['foo'];

    /**
     * Store all allowed values.
     *
     * @var array
     */
    private static $storedValues = [];

    /**
     * Store the value of the specified key.
     *
     * @param  string $key
     * @param  mixed  $value
     * @return void
     */
    public static function set(string $key, $value)
    {
        if (!in_array($key, self::$allowedKeys)) {
            throw new InvalidArgumentException('Invalid key given');
        }
        self::$storedValues[$key] = $value;
    }

    /**
     * Get the value of the specified key.
     *
     * @param  string $key
     * @return mixed
     */
    public static function get(string $key)
    {
        if (!in_array($key, self::$allowedKeys) || !isset(self::$storedValues[$key])) {
            throw new InvalidArgumentException('Invalid key given');
        }
        return self::$storedValues[$key];
    }
}
