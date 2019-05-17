<?php

namespace PHPDesignPatterns\Creational\Pool;

class ThreadPool
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
        if (count($this->idleThread) == 0) {
            $thread = new Thread;
        } else {
            $thread = array_pop($this->idleThread);
        }
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
        $key = spl_object_hash($thread);
        if (isset($this->busyThread[$key])) {
            unset($this->busyThread[$key]);
            $this->idleThread[$key] = $thread;
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
