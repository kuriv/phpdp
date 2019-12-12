<?php

namespace PHPDesignPatterns\More\Repository;

use OutOfBoundsException;

use PHPUnit\Framework\TestCase;

class RepositoryTest extends TestCase
{
    public function testCanGenerateID()
    {
        $repository = new Repository(new PostAction);
        $this->assertEquals(1, $repository->generateID()->getID());
    }

    // public function testThrowsExceptionWhenTryingToFindPostWhichDoesNotExist()
    // {
    //     $this->expectException(OutOfBoundsException::class);
    //     $this->expectExceptionMessage('Post with ID 42 does not exist');
    //     $repository = new Repository(new PostAction);
    //     $repository->find(PostID::getInstance(42));
    // }

    // public function testCanSavePostDraft()
    // {
    //     $repository = new Repository(new PostAction);
    //     $postID = $repository->generateID();
    //     $post = Post::draft($postID, 'Repository Pattern', 'PHP Design Patterns');
    //     $repository->save($post);
    //     $repository->find($postID);
    //     $this->assertEquals($postID, $repository->find($postID)->getID());
    //     // $this->assertEquals(PostStatus::STATE_DRAFT, $post->getStatus()->toString());
    // }
}
