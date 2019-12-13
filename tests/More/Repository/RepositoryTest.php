<?php

namespace Kuriv\PHPDesignPatterns\More\Repository;

use PHPUnit\Framework\TestCase;
use OutOfBoundsException;

class RepositoryTest extends TestCase
{
    public function testCanGenerateID()
    {
        $repository = new Repository(new PostAction);
        $this->assertEquals(1, $repository->generateID()->getID());
    }

    public function testThrowsExceptionWhenTryingToFindPostWhichDoesNotExist()
    {
        $repository = new Repository(new PostAction);
        $this->expectException(OutOfBoundsException::class);
        $this->expectExceptionMessage('Post with ID 42 does not exist');
        $repository->find(PostID::getInstance(42));
    }

    public function testCanSavePostDraft()
    {
        $repository = new Repository(new PostAction);
        $post_id = $repository->generateID();
        $post = Post::draft($post_id, 'Repository Pattern', 'PHP Design Patterns');
        $repository->save($post);
        $this->assertEquals($post_id, $repository->find($post_id)->getPostID());
        $this->assertEquals(PostStatus::STATUS_DRAFT, (string) $post->getPostStatus());
    }
}
