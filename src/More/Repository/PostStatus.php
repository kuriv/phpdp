<?php

namespace PHPDesignPatterns\More\Repository;

use InvalidArgumentException;

class PostStatus
{
    /**
     * Just a test constant.
     *
     * @var int
     */
    const STATUS_DRAFT_ID = 1;

    /**
     * Just a test constant.
     *
     * @var string
     */
    const STATUS_DRAFT = 'Draft';

    /**
     * Just a test constant.
     *
     * @var int
     */
    const STATUS_PUBLISHED_ID = 2;

    /**
     * Just a test constant.
     *
     * @var string
     */
    const STATUS_PUBLISHED = 'Published';

    /**
     * Define an array of allowed status.
     *
     * @var array
     */
    private static $validStatus = [
        self::STATUS_DRAFT_ID     => self::STATUS_DRAFT,
        self::STATUS_PUBLISHED_ID => self::STATUS_PUBLISHED
    ];

    /**
     * Store the post status ID.
     *
     * @var int
     */
    private $postStatusID;

    /**
     * Store the post status.
     *
     * @var string
     */
    private $postStatus;

    /**
     * Store the post status ID and post status to the current instance.
     *
     * @param  int    $postStatusID
     * @param  string $postStatus
     * @return void
     */
    private function __construct(int $postStatusID, string $postStatus)
    {
        $this->postStatusID = $postStatusID;
        $this->postStatus = $postStatus;
    }

    /**
     * Get the created instance by post ID.
     *
     * @param  int    $postStatusID
     * @return PostStatus
     */
    public static function getInstanceByPostID(int $postStatusID): PostStatus
    {
        if (!isset(self::$validStatus[$postStatusID])) {
            throw new InvalidArgumentException('Invalid post status ID given');
        }
        return new self($postStatusID, self::$validStatus[$postStatusID]);
    }

    /**
     * Get the created instance by post status.
     *
     * @param  string $postStatus
     * @return PostStatus
     */
    public static function getInstanceByPostStatus(string $postStatus): PostStatus
    {
        if (!in_array($postStatus, self::$validStatus, true)) {
            throw new InvalidArgumentException('Invalid post status given');
        }
        return new self(array_search($postStatus, self::$validStatus), $postStatus);
    }

    /**
     * Get the post status ID.
     *
     * @param  void
     * @return int
     */
    public function getPostStatusID(): int
    {
        return $this->postStatusID;
    }

    /**
     * Get the post status.
     *
     * @param  void
     * @return string
     */
    public function getPostStatus(): string
    {
        return $this->postStatus;
    }
}
