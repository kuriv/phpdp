<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Pool;

use PHPUnit\Framework\TestCase;
use PHPDesignPatterns\Creational\Pool\WorkerPool;

class PoolTest extends TestCase
{
    public function testCanGetNewInstancesWithFind()
    {
        $pool = new WorkerPool;
        $work1 = $pool->find();
        $work2 = $pool->find();

        $this->assertCount(2, $pool);
        $this->assertNotSame($work1, $work2);
    }

    public function testCanGetSameInstanceTwiceWhenFreeItFirst()
    {
        $pool = new WorkerPool;
        $work1 = $pool->find();
        $pool->free($work1);
        $work2 = $pool->find();

        $this->assertCount(1, $pool);
        $this->assertSame($work1, $work2);
    }
}
