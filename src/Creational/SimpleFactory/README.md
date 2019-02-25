# Simple Factory

It differs from the static factory because it is not static.

Therefore, you can have multiple factories, differently parameterized, you can subclass it and you can mock it.

It always should be preferred over a static factory!

## UML



## Code

Vehicle.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\SimpleFactory;

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

namespace PHPDesignPatterns\Creational\SimpleFactory;

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

namespace PHPDesignPatterns\Creational\SimpleFactory;

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

SimpleFactory.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\SimpleFactory;

class SimpleFactory
{
    /**
     * Create vehicle.
     *
     * @param  string $vehicle
     * @return Vehicle
     */
    public function createVehicle(string $vehicle): Vehicle
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

SimpleFactoryTest.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\SimpleFactory;

use PHPUnit\Framework\TestCase;
use PHPDesignPatterns\Creational\SimpleFactory\SimpleFactory;
use PHPDesignPatterns\Creational\SimpleFactory\Bus;
use PHPDesignPatterns\Creational\SimpleFactory\Car;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateBus()
    {
        $bus = (new SimpleFactory)->createVehicle('Bus');

        $this->assertInstanceOf(Bus::class, $bus);
    }

    public function testCanCreateCar()
    {
        $car = (new SimpleFactory)->createVehicle('Car');

        $this->assertInstanceOf(Car::class, $car);
    }
}

```