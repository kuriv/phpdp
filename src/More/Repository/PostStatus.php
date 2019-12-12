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
     * Store the ID.
     *
     * @var int
     */
    private $id;

    /**
     * Store the status.
     *
     * @var string
     */
    private $status;

    /**
     * Store the ID and status to the current instance.
     *
     * @param  int    $id
     * @param  string $status
     * @return void
     */
    private function __construct(int $id, string $status)
    {
        $this->id = $id;
        $this->status = $status;
    }

    /**
     * Get the created instance by ID.
     *
     * @param  int    $id
     * @return PostStatus
     */
    public static function getInstanceByID(int $id): PostStatus
    {
        if (!isset(self::$validStatus[$id])) {
            throw new InvalidArgumentException('Invalid ID given');
        }
        return new self($id, self::$validStatus[$id]);
    }

    /**
     * Get the created instance by status.
     *
     * @param  string $status
     * @return PostStatus
     */
    public static function getInstanceByStatus(string $status): PostStatus
    {
        if (!in_array($status, self::$validStatus, true)) {
            throw new InvalidArgumentException('Invalid status given');
        }
        return new self(array_search($status, self::$validStatus), $status);
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

    /**
     * Get the status.
     *
     * @param  void
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
}
