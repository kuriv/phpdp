# Singleton

To have only one instance of this object in the application that will handle all calls.

## UML



## Code

Singleton.php

```php
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

```

## Test

SingletonTest.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Singleton;

use PHPUnit\Framework\TestCase;
use PHPDesignPatterns\Creational\Singleton\Singleton;

class SingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstInstance = Singleton::getinstance();
        $secoedInstance = Singleton::getinstance();

        $this->assertInstanceOf(Singleton::class, $firstInstance);
        $this->assertSame($firstInstance, $secoedInstance);
    }
}

```