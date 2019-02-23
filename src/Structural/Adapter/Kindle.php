<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Structural\Adapter;

class Kindle implements KindleInterface
{
    /**
     * Current page.
     *
     * @var int
     */
    private $page;

    /**
     * Total pages.
     *
     * @var int
     */
    private $totalPages;

    /**
     * Unlock a book.
     *
     * @param  void
     * @return void
     */
    public function unlock()
    {
        $this->page = 1;
        $this->totalPages = 100;
    }

    /**
     * Press the next page.
     *
     * @param  void
     * @return void
     */
    public function pressNext()
    {
        $this->page++;
    }

    /**
     * Get the current page and total number of pages, like [10, 100].
     *
     * @param  void
     * @return array
     */
    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}
