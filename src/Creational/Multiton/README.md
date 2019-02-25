# Multiton

To have only a list of named instances that are used, like a singleton but with several instances.

## UML



## Code

Multiton.php

```php
<?php

declare(strict_types = 1);

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

```

## Test

MultitonTest.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Multiton;

use PHPUnit\Framework\TestCase;
use PHPDesignPatterns\Creational\Multiton\Multiton;

class MultitonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstInstance = Multiton::getinstance('1');
        $secoedInstance = Multiton::getinstance('1');

        $this->assertInstanceOf(Multiton::class, $firstInstance);
        $this->assertSame($firstInstance, $secoedInstance);
    }

    public function testUniquenessForEveryInstance()
    {
        $firstInstance = Multiton::getinstance('1');
        $secoedInstance = Multiton::getinstance('2');

        $this->assertInstanceOf(Multiton::class, $firstInstance);
        $this->assertInstanceOf(Multiton::class, $secoedInstance);
        $this->assertNotSame($firstInstance, $secoedInstance);
    }
}

```