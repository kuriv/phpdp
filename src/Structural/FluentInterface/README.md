# FluentInterface

To write code that is easy readable just like sentences in a natural language.

## UML

![FluentInterface](FluentInterface.png)

## Code

SQL.php

```php
<?php

namespace PHPDesignPatterns\Structural\FluentInterface;

class SQL
{
    /**
     * Store the fields to be queried.
     *
     * @var array
     */
    private $fields = [];

    /**
     * Store the table to be queried.
     *
     * @var array
     */
    private $table = [];

    /**
     * Store the condition to be queried.
     *
     * @var array
     */
    private $condition = [];

    /**
     * Store the fields to be queried.
     *
     * @param  array  $fields
     * @return SQL
     */
    public function select(array $fields): SQL
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * Store the table to be queried.
     *
     * @param  string $table
     * @return SQL
     */
    public function from(string $table): SQL
    {
        $this->table[] = $table;
        return $this;
    }

    /**
     * Store the condition to be queried.
     *
     * @param  string $condition
     * @return SQL
     */
    public function where(string $condition): SQL
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * Return formatted SQL statement.
     *
     * @param  void
     * @return string
     */
    public function __toString(): string
    {
        return sprintf(
            'SELECT %s FROM %s WHERE %s',
            implode(', ', $this->fields),
            implode(', ', $this->table),
            implode(', ', $this->condition)
        );
    }
}

```

## Test

FluentInterfaceTest.php

```php
<?php

namespace PHPDesignPatterns\Structural\FluentInterface;

use PHPUnit\Framework\TestCase;
use PHPDesignPatterns\Structural\FluentInterface\SQL;

class FluentInterfaceTest extends TestCase
{
    public function testBuildSQL()
    {
        $sql = (new SQL)->select(['username', 'password'])->from('user')->where('id = 1');
        $this->assertEquals('SELECT username, password FROM user WHERE id = 1', $sql);
    }
}

```
