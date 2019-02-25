# Abstract Factory

To create series of related or dependent objects without specifying their concrete classes.

Usually the created classes all implement the same interface.

The client of the abstract factory does not care about how these objects are created, it just knows how they go together.

## UML



## Code

Engine.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\AbstractFactory;

abstract class Engine
{
    /**
     * Provide power for the vehicle.
     *
     * @param  void
     * @return void
     */
    abstract public function power();
}

```

BusEngine.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\AbstractFactory;

class BusEngine extends Engine
{
    /**
     * Provide power for the vehicle.
     *
     * @param  void
     * @return void
     */
    public function power()
    {
    }
}

```

CarEngine.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\AbstractFactory;

class CarEngine extends Engine
{
    /**
     * Provide power for the vehicle.
     *
     * @param  void
     * @return void
     */
    public function power()
    {
    }
}

```

Headlight.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\AbstractFactory;

abstract class Headlight
{
    /**
     * Provide light for the vehicle.
     *
     * @param  void
     * @return void
     */
    abstract public function light();
}

```

BusHeadlight.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\AbstractFactory;

class BusHeadlight extends Headlight
{
    /**
     * Provide light for the vehicle.
     *
     * @param  void
     * @return void
     */
    public function light()
    {
    }
}

```

CarHeadlight.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\AbstractFactory;

class CarHeadlight extends Headlight
{
    /**
     * Provide light for the vehicle.
     *
     * @param  void
     * @return void
     */
    public function light()
    {
    }
}

```

VehicleFactory.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\AbstractFactory;

abstract class VehicleFactory
{
    /**
     * Create vehicle.
     *
     * @param  void
     * @return Engine
     */
    abstract public function createEngine(): Engine;

    /**
     * Create headlight.
     *
     * @param  void
     * @return Headlight
     */
    abstract public function createHeadlight(): Headlight;
}

```

BusFactory.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\AbstractFactory;

class BusFactory extends VehicleFactory
{
    /**
     * Create vehicle.
     *
     * @param  void
     * @return Engine
     */
    public function createEngine(): Engine
    {
        return new BusEngine;
    }

    /**
     * Create headlight.
     *
     * @param  void
     * @return Headlight
     */
    public function createHeadlight(): Headlight
    {
        return new BusHeadlight;
    }
}

```

CarFactory.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\AbstractFactory;

class CarFactory extends VehicleFactory
{
    /**
     * Create vehicle.
     *
     * @param  void
     * @return Engine
     */
    public function createEngine(): Engine
    {
        return new CarEngine;
    }

    /**
     * Create headlight.
     *
     * @param  void
     * @return Headlight
     */
    public function createHeadlight(): Headlight
    {
        return new CarHeadlight;
    }
}

```

## Test

AbstractFactoryTest.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\AbstractFactory;

use PHPUnit\Framework\TestCase;
use PHPDesignPatterns\Creational\AbstractFactory\BusFactory;
use PHPDesignPatterns\Creational\AbstractFactory\Bus;
use PHPDesignPatterns\Creational\AbstractFactory\CarFactory;
use PHPDesignPatterns\Creational\AbstractFactory\Car;
use PHPDesignPatterns\Creational\AbstractFactory\Engine;
use PHPDesignPatterns\Creational\AbstractFactory\Headlight;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateBusEngine()
    {
        $busFactory = new BusFactory;
        $busEngine = $busFactory->createEngine();

        $this->assertInstanceOf(Engine::class, $busEngine);
    }

    public function testCanCreateBusHeadlight()
    {
        $busFactory = new BusFactory;
        $busHeadlight = $busFactory->createHeadlight();

        $this->assertInstanceOf(Headlight::class, $busHeadlight);
    }

    public function testCanCreateCarEngine()
    {
        $carFactory = new CarFactory;
        $carEngine = $carFactory->createEngine();

        $this->assertInstanceOf(Engine::class, $carEngine);
    }

    public function testCanCreateCarHeadlight()
    {
        $carFactory = new CarFactory;
        $carHeadlight = $carFactory->createHeadlight();

        $this->assertInstanceOf(Headlight::class, $carHeadlight);
    }
}

```