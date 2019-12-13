<?php

namespace Kuriv\PHPDesignPatterns\Structural\Registry;

use InvalidArgumentException;
use stdClass;

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
     * @param  string   $key
     * @param  stdClass $value
     * @return void
     */
    public static function set(string $key, stdClass $value)
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
     * @return stdClass
     */
    public static function get(string $key): stdClass
    {
        if (!in_array($key, self::$allowedKeys) || !isset(self::$storedValues[$key])) {
            throw new InvalidArgumentException('Invalid key given');
        }
        return self::$storedValues[$key];
    }
}
