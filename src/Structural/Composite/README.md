# Composite

To treat a group of objects the same way as a single instance of the object.

## UML

![Composite](Composite.png)

## Code

Renderable.php

```php
<?php

namespace PHPDesignPatterns\Structural\Composite;

interface Renderable
{
    /**
     * Render some components.
     *
     * @param  void
     * @return string
     */
    public function render(): string;
}

```

Text.php

```php
<?php

namespace PHPDesignPatterns\Structural\Composite;

class Text implements Renderable
{
    /**
     * Store a piece of text.
     *
     * @var string
     */
    private $text;

    /**
     * Store a piece of text to the current instance.
     *
     * @param  string $text
     * @return void
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }

    /**
     * Render a piece of text.
     *
     * @param  void
     * @return string
     */
    public function render(): string
    {
        return $this->text;
    }
}

```

Input.php

```php
<?php

namespace PHPDesignPatterns\Structural\Composite;

class Input implements Renderable
{
    /**
     * Render an input box.
     *
     * @param  void
     * @return string
     */
    public function render(): string
    {
        return '<input type="text">';
    }
}

```

Section.php

```php
<?php

namespace PHPDesignPatterns\Structural\Composite;

class Section implements Renderable
{
    /**
     * Store some elements.
     *
     * @var array
     */
    private $elements = [];

    /**
     * Render all elements stored in the current instance.
     *
     * @param  void
     * @return string
     */
    public function render(): string
    {
        $string = '<section>';
        foreach ($this->elements as $element) {
            $string .= $element->render();
        }
        $string .= '</section>';
        return $string;
    }

    /**
     * Store some elements to the current instance.
     *
     * @param  Renderable $element
     * @return void
     */
    public function addElement(Renderable $element)
    {
        $this->elements[] = $element;
    }
}

```

## Test

CompositeTest.php

```php
<?php

namespace PHPDesignPatterns\Structural\Composite;

use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testRender()
    {
        $section = new Section;
        $section->addElement(new Text('Username:'));
        $section->addElement(new Input);
        $internal = new Section;
        $internal->addElement(new Text('Password:'));
        $internal->addElement(new Input);
        $section->addElement($internal);
        $this->assertEquals(
            '<section>Username:<input type="text"><section>Password:<input type="text"></section></section>',
            $section->render()
        );
    }
}

```

