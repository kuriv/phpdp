<?php

namespace PHPDesignPatterns\More\Repository;

interface Action
{
    /**
     * Generate an post ID.
     *
     * @param  void
     * @return int
     */
    public function generatePostID(): int;

    /**
     * Find the specified data.
     *
     * @param  int    $postID
     * @return array
     */
    public function find(int $postID): array;

    /**
     * Save the data.
     *
     * @param  array  $array
     * @return void
     */
    public function save(array $array);

    /**
     * Delete the specified data.
     *
     * @param  int    $postID
     * @return void
     */
    public function delete(int $postID);
}
