# Prototype

## Purpose

To avoid the cost of creating objects the standard way (new FooPrototype) and instead create a prototype and clone it.

## UML

[![Prototype][UML-image]][UML-url]

## Code

Prototype.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Prototype;

abstract class Prototype
{
    /**
     * Do something when the instance being cloned.
     *
     * @param  void
     * @return void
     */
    abstract public function __clone();
}

```

FooPrototype.php

```php
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

```

BarPrototype.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Prototype;

class BarPrototype extends Prototype
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

```

## Test

MultitonTest.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Prototype;

use PHPUnit\Framework\TestCase;
use PHPDesignPatterns\Creational\Prototype\FooPrototype;
use PHPDesignPatterns\Creational\Prototype\BarPrototype;

class PrototypeTest extends TestCase
{
    public function testCanGetFooPrototypeAndBarPrototype()
    {
        $fooPrototype = new FooPrototype;
        $barPrototype = new BarPrototype;

        for ($i = 0; $i < 10; $i++) {
            $foo = clone $fooPrototype;
            $this->assertInstanceOf(FooPrototype::class, $foo);
        }

        for ($i = 0; $i < 10; $i++) {
            $bar = clone $barPrototype;
            $this->assertInstanceOf(BarPrototype::class, $bar);
        }
    }
}

```



[UML-image]: https://raw.githubusercontent.com/kuriv/kuriv.github.io/master/.cloud/phpdp/Creational/Prototype/Prototype.svg?sanitize=true
[UML-url]: https://github.com/kuriv/phpdp/tree/master/src/Creational/Prototype