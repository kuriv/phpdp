<?php

namespace PHPDesignPatterns\Creational\Pool;

use Countable;

class ThreadPool implements Countable
{
    /**
     * Idle thread.
     *
     * @var array
     */
    private $idleThread = [];

    /**
     * Busy thread.
     *
     * @var array
     */
    private $busyThread = [];

    /**
     * Create a thread.
     *
     * @param  void
     * @return Thread
     */
    public function createThread(): Thread
    {
        $thread = count($this->idleThread) == 0 ? new Thread : array_pop($this->idleThread);
        return $this->busyThread[spl_object_hash($thread)] = $thread;
    }

    /**
     * Release a thread.
     *
     * @param  Thread $thread
     * @return void
     */
    public function releaseThread(Thread $thread)
    {
        $hash = spl_object_hash($thread);
        if (isset($this->busyThread[$hash])) {
            unset($this->busyThread[$hash]);
            $this->idleThread[$hash] = $thread;
        }
    }

    /**
     * Count the total number of threads.
     *
     * @param  void
     * @return int
     */
    public function count(): int
    {
        return count($this->idleThread) + count($this->busyThread);
    }
}
