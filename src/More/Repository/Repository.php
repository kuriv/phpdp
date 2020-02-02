<?php

namespace Kuriv\PHPDesignPatterns\More\Repository;

use OutOfBoundsException;

class Repository
{
    /**
     * Store the action instance.
     *
     * @var Action
     */
    private Action $action;

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
    public function generateID(): PostID
    {
        return PostID::getInstance($this->action->generateID());
    }

    /**
     * Get the specified instance.
     *
     * @param  PostID $id
     * @return Post
     */
    public function find(PostID $id): Post
    {
        try {
            $id = $id->getID();
            $result = $this->action->find($id);
        } catch (OutOfBoundsException $e) {
            throw new OutOfBoundsException(sprintf('Post with ID %d does not exist', $id), 0, $e);
        }
        return Post::getInstance($result);
    }

    /**
     * Save the data.
     *
     * @param  Post   $post
     * @return void
     */
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
