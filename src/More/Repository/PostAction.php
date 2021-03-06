<?php

namespace Kuriv\PHPDesignPatterns\More\Repository;

use OutOfBoundsException;

class PostAction implements Action
{
    /**
     * Store the ID.
     *
     * @var int
     */
    private int $id = 0;

    /**
     * Store the data.
     *
     * @var array
     */
    private array $data = [];

    /**
     * Generate an ID.
     *
     * @param  void
     * @return int
     */
    public function generateID(): int
    {
        return ++$this->id;
    }

    /**
     * Find the specified data.
     *
     * @param  int    $id
     * @return array
     */
    public function find(int $id): array
    {
        if (!isset($this->data[$id])) {
            throw new OutOfBoundsException(sprintf('No data found for ID %d', $id));
        }
        return $this->data[$id];
    }

    /**
     * Save the data.
     *
     * @param  array  $array
     * @return void
     */
    public function save(array $array)
    {
        $this->data[$this->id] = $array;
    }

    /**
     * Delete the specified data.
     *
     * @param  int    $id
     * @return void
     */
    public function delete(int $id)
    {
        if (!isset($this->data[$id])) {
            throw new OutOfBoundsException(sprintf('No data found for ID %d', $id));
        }
        unset($this->data[$id]);
    }
}
