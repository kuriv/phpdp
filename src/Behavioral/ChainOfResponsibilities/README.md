# ChainOfResponsibilities

> To build a chain of objects to handle a call in sequential order. If one object cannot handle a call, it delegates the call to the next in the chain and so forth.

## UML

![ChainOfResponsibilities](ChainOfResponsibilities.png)

## Code

Handler.php

```php
<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\ChainOfResponsibilities;

abstract class Handler
{
    /**
     * Store the handler instance.
     *
     * @var Handler|null
     */
    private ?Handler $handler = null;

    /**
     * Store the handler instance to the current instance.
     *
     * @param  Handler|null $handler
     * @return void
     */
    public function __construct(Handler $handler = null)
    {
        $this->handler = $handler;
    }

    /**
     * Return the processed data.
     *
     * @param  int    $request
     * @return string
     */
    final public function handle(int $request): string
    {
        $data = $this->process($request);
        if (empty($data) && isset($this->handler)) {
            $data = $this->handler->handle($request);
        }
        return $data;
    }

    /**
     * Process required data.
     *
     * @param  int    $request
     * @return string
     */
    abstract protected function process(int $request): string;
}

```

FooHandler.php

```php
<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\ChainOfResponsibilities;

class FooHandler extends Handler
{
    /**
     * Process required data.
     *
     * @param  int    $request
     * @return string
     */
    protected function process(int $request): string
    {
        return $request > 0 ? 'Foo' : '';
    }
}

```

BarHandler.php

```php
<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\ChainOfResponsibilities;

class BarHandler extends Handler
{
    /**
     * Process required data.
     *
     * @param  int    $request
     * @return string
     */
    protected function process(int $request): string
    {
        return $request < 0 ? 'Bar' : '';
    }
}

```

BazHandler.php

```php
<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\ChainOfResponsibilities;

class BazHandler extends Handler
{
    /**
     * Process required data.
     *
     * @param  int    $request
     * @return string
     */
    protected function process(int $request): string
    {
        return $request == 0 ? 'Baz' : '';
    }
}

```

## Test

ChainOfResponsibilitiesTest.php

```php
<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\ChainOfResponsibilities;

use PHPUnit\Framework\TestCase;

class ChainOfResponsibilitiesTest extends TestCase
{
    private $requests = [1, -1, 2, 0];

    public function testCanHandleDifferentRequests()
    {
        $handler = new FooHandler(new BarHandler(new BazHandler));
        $data = array_map(fn(int $value): string => $handler->handle($value), $this->requests);
        $this->assertEquals(['Foo', 'Bar', 'Foo', 'Baz'], $data);
    }
}

```

