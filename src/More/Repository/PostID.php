<?php

namespace Kuriv\PHPDesignPatterns\More\Repository;

use InvalidArgumentException;

class PostID
{
    /**
     * Store the ID.
     *
     * @var int
     */
    private $id;

    /**
     * Store the ID to the current instance.
     *
     * @param  int $id
     * @return void
     */
    private function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * Get the created instance.
     *
     * @param  int    $id
     * @return PostID
     */
    public static function getInstance(int $id): PostID
    {
        if ($id <= 0) {
            throw new InvalidArgumentException('Invalid ID given');
        }
        return new self($id);
    }

    /**
     * Get the ID.
     *
     * @param  void
     * @return int
     */
    public function getID(): int
    {
        return $this->id;
    }
}
