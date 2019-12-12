<?php

namespace PHPDesignPatterns\More\Repository;

class Post
{
    /**
     * Store the post ID instance.
     *
     * @var PostID
     */
    private $postID;

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
     * Store the post status instance.
     *
     * @var PostStatus
     */
    private $postStatus;

    /**
     * Store the post ID instance, title, content and post status instance to the current instance.
     *
     * @param  PostID     $postID
     * @param  string     $title
     * @param  string     $content
     * @param  PostStatus $postStatus
     * @return void
     */
    private function __construct(PostID $postID, string $title, string $content, PostStatus $postStatus)
    {
        $this->postID = $postID;
        $this->title = $title;
        $this->content = $content;
        $this->postStatus = $postStatus;
    }

    /**
     * Get the instance of the draft.
     *
     * @param  PostID $postID
     * @param  string $title
     * @param  string $content
     * @return Post
     */
    public static function draft(PostID $postID, string $title, string $content): Post
    {
        return new self($postID, $title, $content, PostStatus::getInstanceByPostStatus(PostStatus::STATUS_DRAFT));
    }

    /**
     * Get the created instance.
     *
     * @param  array  $array
     * @return Post
     */
    public static function getInstance(array $array): Post
    {
        return new self(PostID::getInstance($array['postID']), $array['title'], $array['content'], PostStatus::getInstanceByID($array['postStatus']));
    }

    /**
     * Get the post ID instance.
     *
     * @param  void
     * @return PostID
     */
    public function getPostID(): PostID
    {
        return $this->postID;
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
     * Get the post status instance.
     *
     * @param  void
     * @return PostStatus
     */
    public function getPostStatus(): PostStatus
    {
        return $this->postStatus;
    }
}
