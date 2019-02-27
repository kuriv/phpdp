# Pool

## Purpose

The object pool pattern is a software creational design pattern that uses a set of initialized objects kept ready to use a "pool" rather than allocating and destroying them on demand. A client of the pool will request an object from the pool and perform operations on the returned object. When the client has finished, it returns the object, which is a specific type of factory object, to the pool rather than destroying it.

Object pooling can offer a significant performance boost in situations where the cost of initializing a class instance is high, the rate of instantiation of a class is high, and the number of instances in use at any one time is low. The pooled object is obtained in predictable time when creation of the new objects (especially over network) may take variable time.

However these benefits are mostly true for objects that are expensive with respect to time, such as database connections, socket connections, threads and large graphic objects like fonts or bitmaps. In certain situations, simple object pooling (that hold no external resources, but only occupy memory) may not be efficient and could decrease performance.

## UML

[![Pool][UML-image]][UML-url]

## Code

Worker.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Pool;

class Worker
{
}

```

WorkerPool.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Pool;

use Countable;

class WorkerPool implements Countable
{
    /**
     * Busy worker.
     *
     * @var array
     */
    private $busyWorker = [];

    /**
     * Idle worker.
     *
     * @var array
     */
    private $idleWorker = [];

    /**
     * Find a worker.
     *
     * @param  void
     * @return Worker
     */
    public function find(): Worker
    {
        if (count($this->idleWorker) == 0) {
            $worker = new Worker;
        } else {
            $worker = array_pop($this->idleWorker);
        }
        $this->busyWorker[spl_object_hash($worker)] = $worker;
        return $worker;
    }

    /**
     * Free a worker.
     *
     * @param  Worker $worker
     * @return void
     */
    public function free(Worker $worker)
    {
        $key = spl_object_hash($worker);
        if (isset($this->busyWorker[$key])) {
            unset($this->busyWorker[$key]);
            $this->idleWorker[$key] = $worker;
        }
    }

    /**
     * Count total number of workers.
     *
     * @param  void
     * @return int
     */
    public function count(): int
    {
        return count($this->busyWorker) + count($this->idleWorker);
    }
}

```

## Test

PoolTest.php

```php
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

```



[UML-image]: https://raw.githubusercontent.com/kuriv/kuriv.github.io/master/.cloud/phpdp/Creational/Pool/Pool.svg?sanitize=true
[UML-url]: https://github.com/kuriv/phpdp/tree/master/src/Creational/Pool