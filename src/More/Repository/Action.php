<?php

namespace PHPDesignPatterns\More\Repository;

interface Action
{
    /**
     * Generate an ID.
     *
     * @param  void
     * @return int
     */
    public function generateID(): int;

    /**
     * Find the specified data.
     *
     * @param  int    $id
     * @return array
     */
    public function find(int $id): array;

    /**
     * Save data.
     *
     * @param  array  $array
     * @return void
     */
    public function save(array $array);

    /**
     * Delete the specified data.
     *
     * @param  int    $id
     * @return void
     */
    public function delete(int $id);
}
