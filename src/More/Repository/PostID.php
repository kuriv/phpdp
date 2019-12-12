<?php

namespace PHPDesignPatterns\More\Repository;

use InvalidArgumentException;

class PostID
{
    /**
     * Store the post ID.
     *
     * @var int
     */
    private $postID;

    /**
     * Store the post ID to the current instance.
     *
     * @param  int $postID
     * @return void
     */
    private function __construct(int $postID)
    {
        $this->postID = $postID;
    }

    /**
     * Get the created instance.
     *
     * @param  int    $postID
     * @return PostID
     */
    public static function getInstance(int $postID): PostID
    {
        if ($postID <= 0) {
            throw new InvalidArgumentException('Invalid post ID given');
        }
        return new self($postID);
    }

    /**
     * Get the post ID.
     *
     * @param  void
     * @return int
     */
    public function getPostID(): int
    {
        return $this->postID;
    }
}
