<?php

namespace PHPDesignPatterns\More\Repository;

class Post
{
    /**
     * Store the ID.
     *
     * @var PostID
     */
    private $id;

    /**
     * Store the title.
     *
     * @var string
     */
    private $title;

    /**
     * Store the content.
     *
     * @var string
     */
    private $content;

    /**
     * Store the status.
     *
     * @var PostStatus
     */
    private $status;

    /**
     * Store the ID, title, content and status to the current instance.
     *
     * @param  PostID     $id
     * @param  string     $title
     * @param  string     $content
     * @param  PostStatus $status
     * @return void
     */
    private function __construct(PostID $id, string $title, string $content, PostStatus $status)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->status = $status;
    }

    /**
     * Get the instance of the draft.
     *
     * @param  PostID $id
     * @param  string $title
     * @param  string $content
     * @return Post
     */
    public static function draft(PostID $id, string $title, string $content): Post
    {
        return new self($id, $title, $content, PostStatus::getInstanceByStatus(PostStatus::STATUS_DRAFT));
    }

    /**
     * Get the created instance.
     *
     * @param  array  $array
     * @return Post
     */
    public static function getInstance(array $array): Post
    {
        return new self(PostID::getInstance($array['id']), $array['title'], $array['content'], PostStatus::getInstanceByID($array['status']));
    }

    /**
     * Get the ID.
     *
     * @param  void
     * @return PostID
     */
    public function getID(): PostID
    {
        return $this->id;
    }

    /**
     * Get the title.
     *
     * @param  void
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Get the content.
     *
     * @param  void
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Get the status.
     *
     * @param  void
     * @return PostStatus
     */
    public function getStatus(): PostStatus
    {
        return $this->status;
    }
}
