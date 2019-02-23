<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Structural\Adapter;

class Book implements BookInterface
{
    /**
     * Current page.
     *
     * @var int
     */
    private $page;

    /**
     * Open a book from the beginning.
     *
     * @param  void
     * @return void
     */
    public function open()
    {
        $this->page = 1;
    }

    /**
     * Turn to the next page.
     *
     * @param  void
     * @return void
     */
    public function turnPage()
    {
        $this->page++;
    }

    /**
     * Get the current page.
     *
     * @param  void
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }
}
