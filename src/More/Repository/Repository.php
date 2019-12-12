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
     * Generate an ID instance.
     *
     * @param  void
     * @return PostID
     */
    public function generatePostID(): PostID
    {
        return PostID::getInstance($this->action->generateID());
    }

    public function find(PostID $id): Post
    {
        try {
            $id = $id->getID();
            $post = $this->action->find($id);
        } catch (OutOfBoundsException $e) {
            throw new OutOfBoundsException(sprintf('Post with ID %d does not exist', $id), 0, $e);
        }
        return Post::getInstance($post);
    }

    public function save(Post $post)
    {
        $this->action->save([
            'id'        => $post->getID()->getID(),
            'title'     => $post->getTitle(),
            'content'   => $post->getContent(),
            'status_id' => $post->getStatus()->getStatusID()
        ]);
    }
}
