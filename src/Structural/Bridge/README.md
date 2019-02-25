# Bridge

Decouple an abstraction from its implementation so that the two can vary independently.

## UML



## Code

Formatter.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Structural\Bridge;

interface Formatter
{
    /**
     * Format the input string.
     *
     * @param  string $string
     * @return string
     */
    public function format(string $string): string;
}

```

HtmlFormatter.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Structural\Bridge;

class HtmlFormatter implements Formatter
{
    /**
     * Format the input string.
     *
     * @param  string $string
     * @return string
     */
    public function format(string $string): string
    {
        return sprintf('<p>%s</p>', $string);
    }
}

```

PlainTextFormatter.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Structural\Bridge;

class PlainTextFormatter implements Formatter
{
    /**
     * Format the input string.
     *
     * @param  string $string
     * @return string
     */
    public function format(string $string): string
    {
        return $string;
    }
}

```

Printer.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Structural\Bridge;

abstract class Printer
{
    /**
     * Instance that used for bridging.
     *
     * @var Formatter
     */
    protected $printer;

    /**
     * Save the instance that used for bridging.
     *
     * @param  Formatter $printer
     * @return void
     */
    public function __construct(Formatter $printer)
    {
        $this->printer = $printer;
    }

    /**
     * Print string.
     *
     * @param  void
     * @return string
     */
    abstract public function print(): string;
}

```

HelloWorldPrinter.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Structural\Bridge;

class HelloWorldPrinter extends Printer
{
    /**
     * Print string.
     *
     * @param  void
     * @return string
     */
    public function print(): string
    {
        return $this->printer->format('Hello World');
    }
}

```

PingTestPrinter.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Structural\Bridge;

class PingTestPrinter extends Printer
{
    /**
     * Print string.
     *
     * @param  void
     * @return string
     */
    public function print(): string
    {
        return $this->printer->format('Ping Test');
    }
}

```

## Test

BridgeTest.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Structural\Bridge;

use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testCanPrintUsingThePlainTextFormatter()
    {
        $printer = new HelloWorldPrinter(new PlainTextFormatter);

        $this->assertSame('Hello World', $printer->print());
    }

    public function testCanPrintUsingTheHtmlFormatter()
    {
        $printer = new HelloWorldPrinter(new HtmlFormatter);

        $this->assertSame('<p>Hello World</p>', $printer->print());
    }
}

```