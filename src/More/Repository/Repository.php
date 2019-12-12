<?php

namespace PHPDesignPatterns\More\Repository;

use OutOfBoundsException;

class Repository
{
    /**
     * Store the action instance.
     *
     * @var Action
     */
    private $action;

    /**
     * Store the action instance to the current instance.
     *
     * @param  Action $action
     * @return void
     */
    public function __construct(Action $action)
    {
        $this->action = $action;
    }

    /**
     * Generate an post ID instance.
     *
     * @param  void
     * @return PostID
     */
    public function generatePostID(): PostID
    {
        return PostID::getInstance($this->action->generatePostID());
    }

    public function find(PostID $postID): Post
    {
        // try {
        //     $id = $postID->getID();
        //     $post = $this->action->find($id);
        // } catch (OutOfBoundsException $e) {
        //     throw new OutOfBoundsException(sprintf('Post with ID %d does not exist', $id), 0, $e);
        // }
        // return Post::getInstance($post);
    }

    public function save()
    {
    }
}
