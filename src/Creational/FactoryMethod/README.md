# Factory Method

This pattern is a "real" design pattern because it achieves the dependency Inversion principle as known as the "D" in SOLID principles.

it means the factory method class depends on abstractions, not concrete classes.

This is the real trick compared to simple factory or static factory.

## UML



## Code

Vehicle.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\FactoryMethod;

abstract class Vehicle
{
    /**
     * Drive to the destination.
     *
     * @param  string $destination
     * @return void
     */
    abstract public function drive(string $destination);
}

```

Bus.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\FactoryMethod;

class Bus extends Vehicle
{
    /**
     * Drive to the destination.
     *
     * @param  string $destination
     * @return void
     */
    public function drive(string $destination)
    {
    }
}

```

Car.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\FactoryMethod;

class Car extends Vehicle
{
    /**
     * Drive to the destination.
     *
     * @param  string $destination
     * @return void
     */
    public function drive(string $destination)
    {
    }
}

```

VehicleFactory.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\FactoryMethod;

abstract class VehicleFactory
{
    /**
     * Create vehicle.
     *
     * @param  void
     * @return Vehicle
     */
    abstract public function createVehicle(): Vehicle;
}

```

BusFactory.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\FactoryMethod;

class BusFactory extends VehicleFactory
{
    /**
     * Create vehicle.
     *
     * @param  void
     * @return Vehicle
     */
    public function createVehicle(): Vehicle
    {
        return new Bus;
    }
}

```

CarFactory.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\FactoryMethod;

class CarFactory extends VehicleFactory
{
    /**
     * Create vehicle.
     *
     * @param  void
     * @return Vehicle
     */
    public function createVehicle(): Vehicle
    {
        return new Car;
    }
}

```

## Test

FactoryMethodTest.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\FactoryMethod;

use PHPUnit\Framework\TestCase;
use PHPDesignPatterns\Creational\FactoryMethod\BusFactory;
use PHPDesignPatterns\Creational\FactoryMethod\Bus;
use PHPDesignPatterns\Creational\FactoryMethod\CarFactory;
use PHPDesignPatterns\Creational\FactoryMethod\Car;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateBus()
    {
        $busFactory = new BusFactory;
        $bus = $busFactory->createVehicle();

        $this->assertInstanceOf(Bus::class, $bus);
    }

    public function testCanCreateCar()
    {
        $carFactory = new CarFactory;
        $car = $carFactory->createVehicle();

        $this->assertInstanceOf(Car::class, $car);
    }
}

```