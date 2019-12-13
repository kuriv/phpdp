# Prototype

To avoid the cost of creating objects the standard way and instead create a prototype and clone it.

## UML

![Prototype](Prototype.png)

## Code

Prototype.php

```php
<?php

namespace Kuriv\PHPDesignPatterns\Creational\Prototype;

abstract class Prototype
{
    /**
     * Do something when the instance being cloned.
     *
     * @param  void
     * @return void
     */
    abstract protected function __clone();
}

```

FooPrototype.php

```php
<?php

namespace Kuriv\PHPDesignPatterns\Creational\Prototype;

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

namespace Kuriv\PHPDesignPatterns\Creational\Prototype;

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

PrototypeTest.php

```php
<?php

namespace Kuriv\PHPDesignPatterns\Creational\Prototype;

use PHPUnit\Framework\TestCase;

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

