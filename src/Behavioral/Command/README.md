# Command

To encapsulate invocation and decoupling. This pattern uses a "Command" to delegate the method call against the Receiver and presents the same method. Therefore, the Invoker just knows to call the method to process the command of the client. This pattern can also be aggregated to combine more complex commands with minimum copy-paste and relying on composition over inheritance.

## UML

![Command](Command.png)

## Code

Command.php

```php
<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Command;

interface Command
{
    /**
     * Execute some commands here.
     *
     * @param  void
     * @return void
     */
    public function execute();
}

```

HelloWorldCommand.php

```php
<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Command;

class HelloWorldCommand implements Command
{
    /**
     * Store the receiver instance.
     *
     * @var Receiver
     */
    private $receiver;

    /**
     * Store the receiver instance to the current instance.
     *
     * @param  Receiver $receiver
     * @return void
     */
    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * Execute some commands here.
     *
     * @param  void
     * @return void
     */
    public function execute()
    {
        $this->receiver->write('Hello World');
    }
}

```

UndoableCommand.php

```php
<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Command;

interface UndoableCommand extends Command
{
    /**
     * Execute some commands here.
     *
     * @param  void
     * @return void
     */
    public function undo();
}

```

AddMessageDateCommand.php

```php
<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Command;

class AddMessageDateCommand implements UndoableCommand
{
    /**
     * Store the receiver instance.
     *
     * @var Receiver
     */
    private $receiver;

    /**
     * Store the receiver instance to the current instance.
     *
     * @param  Receiver $receiver
     * @return void
     */
    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * Execute some commands here.
     *
     * @param  void
     * @return void
     */
    public function execute()
    {
        $this->receiver->enableDate();
    }

    /**
     * Execute some commands here.
     *
     * @param  void
     * @return void
     */
    public function undo()
    {
        $this->receiver->disableDate();
    }
}

```

Invoker.php

```php
<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Command;

class Invoker
{
    /**
     * Store the command instance.
     *
     * @var Command
     */
    private $command;

    /**
     * Set the specified command instance.
     *
     * @param  Command $command
     * @return void
     */
    public function setCommand(Command $command)
    {
        $this->command = $command;
    }

    /**
     * Run the command.
     *
     * @param  void
     * @return void
     */
    public function run()
    {
        $this->command->execute();
    }
}

```

Receiver.php

```php
<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Command;

class Receiver
{
    /**
     * Store the date display status.
     *
     * @var bool
     */
    private $enableDate = false;

    /**
     * Store the output string.
     *
     * @var array
     */
    private $output = [];

    /**
     * Write the output string.
     *
     * @param  string $string
     * @return void
     */
    public function write(string $string)
    {
        if ($this->enableDate) {
            $string .= ' ['.date('Y-m-d').']';
        }
        $this->output[] = $string;
    }

    /**
     * Get the output string.
     *
     * @param  void
     * @return string
     */
    public function getOutput(): string
    {
        return implode("\n", $this->output);
    }

    /**
     * Enable date display.
     *
     * @param  void
     * @return void
     */
    public function enableDate()
    {
        $this->enableDate = true;
    }

    /**
     * Disable date display.
     *
     * @param  void
     * @return void
     */
    public function disableDate()
    {
        $this->enableDate = false;
    }
}

```

## Test

CommandTest.php

```php
<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Command;

use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testInvocation()
    {
        $invoker = new Invoker;
        $receiver = new Receiver;
        $invoker->setCommand(new HelloWorldCommand($receiver));
        $invoker->run();
        $this->assertSame('Hello World', $receiver->getOutput());
    }
}

```

UndoableCommandTest.php

```php
<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Command;

use PHPUnit\Framework\TestCase;

class UndoableCommandTest extends TestCase
{
    public function testInvocation()
    {
        $invoker = new Invoker;
        $receiver = new Receiver;
        $invoker->setCommand(new HelloWorldCommand($receiver));
        $invoker->run();
        $this->assertSame('Hello World', $receiver->getOutput());

        $addMessageDateCommand = new AddMessageDateCommand($receiver);
        $addMessageDateCommand->execute();
        $invoker->run();
        $this->assertSame("Hello World\nHello World [".date('Y-m-d').']', $receiver->getOutput());

        $addMessageDateCommand->undo();
        $invoker->run();
        $this->assertSame("Hello World\nHello World [".date('Y-m-d')."]\nHello World", $receiver->getOutput());
    }
}

```

