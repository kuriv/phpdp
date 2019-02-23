<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Structural\Adapter;

interface BookInterface
{
    /**
     * Open a book from the beginning.
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
