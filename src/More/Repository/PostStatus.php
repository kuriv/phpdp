<?php

namespace Kuriv\PHPDesignPatterns\More\Repository;

use InvalidArgumentException;

class PostStatus
{
    /**
     * Just a test constant.
     *
     * @var int
     */
    public const STATUS_DRAFT_ID = 1;

    /**
     * Just a test constant.
     *
     * @var string
     */
    public const STATUS_DRAFT = 'Draft';

    /**
     * Just a test constant.
     *
     * @var int
     */
    public const STATUS_PUBLISHED_ID = 2;

    /**
     * Just a test constant.
     *
     * @var string
     */
    public const STATUS_PUBLISHED = 'Published';

    /**
     * Define an array of allowed status.
     *
     * @var array
     */
    private static array $validStatus = [
        self::STATUS_DRAFT_ID     => self::STATUS_DRAFT,
        self::STATUS_PUBLISHED_ID => self::STATUS_PUBLISHED
    ];

    /**
     * Store the status ID.
     *
     * @var int
     */
    private int $status_id;

    /**
     * Store the status string.
     *
     * @var string
     */
    private string $status_string;

    /**
     * Store the status ID and status string to the current instance.
     *
     * @param  int    $status_id
     * @param  string $status_string
     * @return void
     */
    private function __construct(int $status_id, string $status_string)
    {
        $this->status_id = $status_id;
        $this->status_string = $status_string;
    }

    /**
     * Return the current status string.
     *
     * @param  void
     * @return string
     */
    public function __toString(): string
    {
        return $this->status_string;
    }

    /**
     * Get the created instance by status ID.
     *
     * @param  int    $status_id
     * @return PostStatus
     */
    public static function getInstanceByStatusID(int $status_id): PostStatus
    {
        if (!isset(self::$validStatus[$status_id])) {
            throw new InvalidArgumentException('Invalid status ID given');
        }
        return new self($status_id, self::$validStatus[$status_id]);
    }

    /**
     * Get the created instance by status string.
     *
     * @param  string $status_string
     * @return PostStatus
     */
    public static function getInstanceByStatusString(string $status_string): PostStatus
    {
        if (!in_array($status_string, self::$validStatus, true)) {
            throw new InvalidArgumentException('Invalid status string given');
        }
        return new self(array_search($status_string, self::$validStatus, true), $status_string);
    }

    /**
     * Get the status ID.
     *
     * @param  void
     * @return int
     */
    public function getStatusID(): int
    {
        return $this->status_id;
    }

    /**
     * Get the status string.
     *
     * @param  void
     * @return string
     */
    public function getStatusString(): string
    {
        return $this->status_string;
    }
}
