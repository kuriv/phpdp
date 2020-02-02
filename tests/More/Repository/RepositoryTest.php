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
        $id = $repository->generateID();
        $post = Post::draft($id, 'Repository', 'PHP Design Patterns');
        $repository->save($post);
        $this->assertEquals($id, $repository->find($id)->getID());
        $this->assertEquals(PostStatus::STATUS_DRAFT, (string) $post->getStatus());
    }
}
