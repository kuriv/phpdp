<?php

namespace PHPDesignPatterns\More\Repository;

class Post
{
    /**
     * Store the ID instance.
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
     * Store the status instance.
     *
     * @var PostStatus
     */
    private $status;

    /**
     * Store the ID instance, title, content and status instance to the current instance.
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
        return new self($id, $title, $content, PostStatus::getInstanceByStatusString(PostStatus::STATUS_DRAFT));
    }

    /**
     * Get the created instance.
     *
     * @param  array  $array
     * @return Post
     */
    public static function getInstance(array $array): Post
    {
        return new self(PostID::getInstance($array['id']), $array['title'], $array['content'], PostStatus::getInstanceByStatusID($array['status_id']));
    }

    /**
     * Get the ID instance.
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
     * Get the status instance.
     *
     * @param  void
     * @return PostStatus
     */
    public function getStatus(): PostStatus
    {
        return $this->status;
    }
}
