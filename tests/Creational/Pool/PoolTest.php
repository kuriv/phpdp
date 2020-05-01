<?php

namespace Kuriv\PHPDesignPatterns\Creational\Pool;

use PHPUnit\Framework\TestCase;

class PoolTest extends TestCase
{
    public function testCanGetNewInstancesWithCreate()
    {
        $pool = new ThreadPool();
        $firstThread = $pool->createThread();
        $secondThread = $pool->createThread();
        $this->assertCount(2, $pool);
        $this->assertNotSame($firstThread, $secondThread);
    }

    public function testCanGetSameInstanceTwiceWhenReleaseItFirst()
    {
        $pool = new ThreadPool();
        $firstThread = $pool->createThread();
        $pool->releaseThread($firstThread);
        $secondThread = $pool->createThread();
        $this->assertCount(1, $pool);
        $this->assertSame($firstThread, $secondThread);
    }
}
