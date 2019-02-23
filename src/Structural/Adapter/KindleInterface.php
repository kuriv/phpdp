<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Structural\Adapter;

interface KindleInterface
{
    /**
     * Unlock a book.
     *
     * @param  void
     * @return void
     */
    public function unlock();

    /**
     * Press the next page.
     *
     * @param  void
     * @return void
     */
    public function pressNext();

    /**
     * Get the current page and total number of pages, like [10, 100].
     *
     * @param  void
     * @return array
     */
    public function getPage(): array;
}
