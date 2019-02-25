# Static Factory

Similar to the abstract factory, this pattern is used to create series of related or dependent objects.

The difference between this and the abstract factory pattern is that the static factory pattern uses just one static method to create all types of objects it can create.

## UML



## Code

Vehicle.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\StaticFactory;

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

namespace PHPDesignPatterns\Creational\StaticFactory;

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

namespace PHPDesignPatterns\Creational\StaticFactory;

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

StaticFactory.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\StaticFactory;

class StaticFactory
{
    /**
     * Create vehicle.
     *
     * @param  string $vehicle
     * @return Vehicle
     */
    public static function createVehicle(string $vehicle): Vehicle
    {
        if ($vehicle == 'Bus') {
            return new Bus;
        }
        if ($vehicle == 'Car') {
            return new Car;
        }
    }
}

```

## Test

StaticFactoryTest.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\StaticFactory;

use PHPUnit\Framework\TestCase;
use PHPDesignPatterns\Creational\StaticFactory\StaticFactory;
use PHPDesignPatterns\Creational\StaticFactory\Bus;
use PHPDesignPatterns\Creational\StaticFactory\Car;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateBus()
    {
        $bus = StaticFactory::createVehicle('Bus');

        $this->assertInstanceOf(Bus::class, $bus);
    }

    public function testCanCreateCar()
    {
        $car = StaticFactory::createVehicle('Car');

        $this->assertInstanceOf(Car::class, $car);
    }
}

```