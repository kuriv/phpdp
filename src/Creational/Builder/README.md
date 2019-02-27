# Builder

## Purpose

Builder is an interface that build parts of a complex object.

Sometimes, if the builder has a better knowledge of what it builds, this interface could be an abstract class with default methods (also known as adapter).

If you have a complex inheritance tree for objects, it is logical to have a complex inheritance tree for builders too.

## UML

[![Builder][UML-image]][UML-url]

## Code

Parts.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Builder\Parts;

abstract class Parts
{
}

```

Engine.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Builder\Parts;

class Engine extends Parts
{
}

```

Headlight.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Builder\Parts;

class Headlight extends Parts
{
}

```

Vehicle.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Builder;

abstract class Vehicle
{
    /**
     * Current vehicle information.
     *
     * @var array
     */
    private $information = [];

    /**
     * Install parts for the vehicle.
     *
     * @param  string      $name
     * @param  Parts\Parts $parts
     * @return void
     */
    public function installParts(string $name, Parts\Parts $parts)
    {
        $this->information[$name] = $parts;
    }
}

```

Bus.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Builder;

class Bus extends Vehicle
{
}

```

Car.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Builder;

class Car extends Vehicle
{
}

```

VehicleBuilder.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Builder;

interface VehicleBuilder
{
    /**
     * Create vehicle.
     *
     * @param  void
     * @return void
     */
    public function createVehicle();

    /**
     * Add engine.
     *
     * @param  void
     * @return void
     */
    public function addEngine();

    /**
     * Add headlight.
     *
     * @param  void
     * @return void
     */
    public function addHeadlight();

    /**
     * Get vehicle.
     *
     * @param  void
     * @return Vehicle
     */
    public function getVehicle(): Vehicle;
}

```

BusBuilder.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Builder;

class BusBuilder implements VehicleBuilder
{
    /**
     * Current vehicle.
     *
     * @var Bus
     */
    private $bus;

    /**
     * Create vehicle.
     *
     * @param  void
     * @return void
     */
    public function createVehicle()
    {
        $this->bus = new Bus;
    }

    /**
     * Add engine.
     *
     * @param  void
     * @return void
     */
    public function addEngine()
    {
        $this->bus->installParts('busEngine', new Parts\Engine);
    }

    /**
     * Add headlight.
     *
     * @param  void
     * @return void
     */
    public function addHeadlight()
    {
        $this->bus->installParts('busHeadlight', new Parts\Headlight);
    }

    /**
     * Get vehicle.
     *
     * @param  void
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->bus;
    }
}

```

CarBuilder.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Builder;

class CarBuilder implements VehicleBuilder
{
    /**
     * Current vehicle.
     *
     * @var Car
     */
    private $car;

    /**
     * Create vehicle.
     *
     * @param  void
     * @return void
     */
    public function createVehicle()
    {
        $this->car = new Car;
    }

    /**
     * Add engine.
     *
     * @param  void
     * @return void
     */
    public function addEngine()
    {
        $this->car->installParts('carEngine', new Parts\Engine);
    }

    /**
     * Add headlight.
     *
     * @param  void
     * @return void
     */
    public function addHeadlight()
    {
        $this->car->installParts('carHeadlight', new Parts\Headlight);
    }

    /**
     * Get vehicle.
     *
     * @param  void
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}

```

Builder.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Builder;

class Builder
{
    public function build(VehicleBuilder $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addEngine();
        $builder->addHeadlight();

        return $builder->getVehicle();
    }
}

```

## Test

BuilderTest.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Builder;

use PHPUnit\Framework\TestCase;
use PHPDesignPatterns\Creational\Builder\BusBuilder;
use PHPDesignPatterns\Creational\Builder\Bus;
use PHPDesignPatterns\Creational\Builder\CarBuilder;
use PHPDesignPatterns\Creational\Builder\Car;
use PHPDesignPatterns\Creational\Builder\Builder;

class BuilderTest extends TestCase
{
    public function testCanBuildBus()
    {
        $busBuilder = new BusBuilder;
        $bus = (new Builder)->build($busBuilder);

        $this->assertInstanceOf(Bus::class, $bus);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder;
        $car = (new Builder)->build($carBuilder);

        $this->assertInstanceOf(Car::class, $car);
    }
}

```



[UML-image]: https://raw.githubusercontent.com/kuriv/kuriv.github.io/master/.cloud/phpdp/Creational/Builder/Builder.svg?sanitize=true
[UML-url]: https://github.com/kuriv/phpdp/tree/master/src/Creational/Builder