<?php

namespace Kuriv\PHPDesignPatterns\Structural\Adapter;

class TextBook implements Book
{
    /**
     * Current page.
     *
     * @var int
     */
    private $page;

    /**
     * Open a book.
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
