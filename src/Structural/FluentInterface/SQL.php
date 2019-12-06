<?php

namespace PHPDesignPatterns\Structural\FluentInterface;

class SQL
{
    /**
     * Store the fields that need to be queried.
     *
     * @var array
     */
    private $fields = [];

    /**
     * Store the table that need to be queried.
     *
     * @var array
     */
    private $table = [];

    /**
     * Store the condition that need to be queried.
     *
     * @var array
     */
    private $condition = [];

    /**
     * Store the fields that need to be queried.
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
     * Store the table that need to be queried.
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
     * Store the condition that need to be queried.
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
