# Bridge

Decouple an abstraction from its implementation so that the two can vary independently.

## UML

![Bridge](Bridge.png)

## Code

Formatter.php

```php
<?php

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

TextFormatter.php

```php
<?php

namespace PHPDesignPatterns\Structural\Bridge;

class TextFormatter implements Formatter
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

HTMLFormatter.php

```php
<?php

namespace PHPDesignPatterns\Structural\Bridge;

class HTMLFormatter implements Formatter
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

Printer.php

```php
<?php

namespace PHPDesignPatterns\Structural\Bridge;

abstract class Printer
{
    /**
     * Instance that used for bridging.
     *
     * @var Formatter
     */
    protected $formatter;

    /**
     * Save the instance that used for bridging.
     *
     * @param  Formatter $formatter
     * @return void
     */
    public function __construct(Formatter $formatter)
    {
        $this->formatter = $formatter;
    }

    /**
     * Print the string.
     *
     * @param  void
     * @return string
     */
    abstract protected function print(): string;
}

```

PingTestPrinter.php

```php
<?php

namespace PHPDesignPatterns\Structural\Bridge;

class PingTestPrinter extends Printer
{
    /**
     * Print the string.
     *
     * @param  void
     * @return string
     */
    public function print(): string
    {
        return $this->formatter->format('Ping Test');
    }
}

```

HelloWorldPrinter.php

```php
<?php

namespace PHPDesignPatterns\Structural\Bridge;

class HelloWorldPrinter extends Printer
{
    /**
     * Print the string.
     *
     * @param  void
     * @return string
     */
    public function print(): string
    {
        return $this->formatter->format('Hello World');
    }
}

```

## Test