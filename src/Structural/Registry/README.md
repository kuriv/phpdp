# Registry

**REMEMBER THAT THIS INTRODUCES GLOBAL STATE, WHICH SHOULD BE AVOIDED AT ALL TIMES! INSTEAD IMPLEMENT IT USING DEPENDENCY INJECTION!**

To implement a central storage for objects often used throughout the application, is typically implemented using an abstract class with only static methods, or using the `Singleton` pattern.

## UML

![Registry](Registry.png)

## Code

Registry.php

```php
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

```

## Test

RegistryTest.php

```php
<?php

namespace PHPDesignPatterns\Structural\Registry;

use PHPUnit\Framework\TestCase;
use stdClass;

class RegistryTest extends TestCase
{
    public function testSetAndGetLogger()
    {
        $class = new stdClass;
        Registry::set('foo', $class);
        $storedClass = Registry::get('foo');
        $this->assertSame($class, $storedClass);
        $this->assertInstanceOf(stdClass::class, $storedClass);
    }

    // public function testThrowsExceptionWhenTryingToSetInvalidKey()
    // {
    //     Registry::set('bar', new stdClass);
    // }

    // public function testThrowsExceptionWhenTryingToGetNotSetKey()
    // {
    //     Registry::get('bar');
    // }
}

```

