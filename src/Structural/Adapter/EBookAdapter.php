<?php

namespace PHPDesignPatterns\Structural\Adapter;

class EBookAdapter implements Book
{
    /**
     * Instance that needs to be adapted.
     *
     * @var EBook
     */
    private $instance;

    /**
     * Save the instance that needs to be adapted.
     *
     * @param  EBook $instance
     * @return void
     */
    public function __construct(EBook $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Open a book.
     *
     * @param  void
     * @return void
     */
    public function open()
    {
        $this->instance->unlock();
    }

    /**
     * Turn to the next page.
     *
     * @param  void
     * @return void
     */
    public function turnPage()
    {
        $this->instance->pressNext();
    }

    /**
     * Get the current page.
     *
     * @param  void
     * @return int
     */
    public function getPage(): int
    {
        return $this->instance->getPage()[0];
    }
}
