<?php

namespace PHPDesignPatterns\Structural\Adapter;

interface Book
{
    /**
     * Open a book.
     *
     * @param  void
     * @return void
     */
    public function open();

    /**
     * Turn to the next page.
     *
     * @param  void
     * @return void
     */
    public function turnPage();

    /**
     * Get the current page.
     *
     * @param  void
     * @return int
     */
    public function getPage(): int;
}
