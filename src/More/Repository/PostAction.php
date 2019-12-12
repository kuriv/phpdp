<?php

namespace PHPDesignPatterns\More\Repository;

use OutOfBoundsException;

class PostAction implements Action
{
    /**
     * Store the post ID.
     *
     * @var int
     */
    private $postID;

    /**
     * Store the data.
     *
     * @var array
     */
    private $data = [];

    /**
     * Generate an post ID.
     *
     * @param  void
     * @return int
     */
    public function generatePostID(): int
    {
        return ++$this->id;
    }

    /**
     * Find the specified data.
     *
     * @param  int    $postID
     * @return array
     */
    public function find(int $postID): array
    {
        if (!isset($this->data[$postID])) {
            throw new OutOfBoundsException(
                sprintf('No data found for ID %d', $postID)
            );
        }
        return $this->data[$postID];
    }

    /**
     * Save the data.
     *
     * @param  array  $array
     * @return void
     */
    public function save(array $array)
    {
        $this->data[$this->postID] = $array;
    }

    /**
     * Delete the specified data.
     *
     * @param  int    $postID
     * @return void
     */
    public function delete(int $postID)
    {
        if (!isset($this->data[$postID])) {
            throw new OutOfBoundsException(
                sprintf('No data found for ID %d', $postID)
            );
        }
        unset($this->data[$postID]);
    }
}
