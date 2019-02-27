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
