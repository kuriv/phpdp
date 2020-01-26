<?php

namespace Kuriv\PHPDesignPatterns\More\Repository;

class Post
{
    /**
     * Store the ID instance.
     *
     * @var PostID
     */
    private $post_id;

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
    private $post_status;

    /**
     * Store the ID instance, title, content and status instance to the current instance.
     *
     * @param  PostID     $post_id
     * @param  string     $title
     * @param  string     $content
     * @param  PostStatus $post_status
     * @return void
     */
    private function __construct(PostID $post_id, string $title, string $content, PostStatus $post_status)
    {
        $this->post_id = $post_id;
        $this->title = $title;
        $this->content = $content;
        $this->post_status = $post_status;
    }

    /**
     * Get the instance of the draft.
     *
     * @param  PostID $post_id
     * @param  string $title
     * @param  string $content
     * @return Post
     */
    public static function draft(PostID $post_id, string $title, string $content): Post
    {
        return new self($post_id, $title, $content, PostStatus::getInstanceByString(PostStatus::STATUS_DRAFT));
    }

    /**
     * Get the created instance.
     *
     * @param  array  $array
     * @return Post
     */
    public static function getInstance(array $array): Post
    {
        return new self(PostID::getInstance($array['id']), $array['title'], $array['content'], PostStatus::getInstanceByID($array['status_id']));
    }

    /**
     * Get the ID instance.
     *
     * @param  void
     * @return PostID
     */
    public function getPostID(): PostID
    {
        return $this->post_id;
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
    public function getPostStatus(): PostStatus
    {
        return $this->post_status;
    }
}
