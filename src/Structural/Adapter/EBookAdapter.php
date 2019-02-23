<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Structural\Adapter;

class EBookAdapter implements BookInterface
{
    /**
     * instance that needs to be adapted.
     *
     * @var KindleInterface
     */
    protected $eBook;

    /**
     * Save the instance that needs to be adapted.
     *
     * @param  KindleInterface $eBook
     * @return void
     */
    public function __construct(KindleInterface $eBook)
    {
        $this->eBook = $eBook;
    }

    /**
     * Open a book from the beginning.
     *
     * @param  void
     * @return void
     */
    public function open()
    {
        $this->eBook->unlock();
    }

    /**
     * Turn to the next page.
     *
     * @param  void
     * @return void
     */
    public function turnPage()
    {
        $this->eBook->pressNext();
    }

    /**
     * Get the current page.
     *
     * @param  void
     * @return int
     */
    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }
}
