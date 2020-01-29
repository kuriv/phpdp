<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Iterator;

use Countable;
use Iterator;

class BookList implements Countable, Iterator
{
    /**
     * Store several books.
     *
     * @var array
     */
    private array $books = [];

    /**
     * Count the total number of books.
     *
     * @param  void
     * @return int
     */
    public function count(): int
    {
        return count($this->books);
    }

    /**
     * Return the current element of the specified property.
     *
     * @param  void
     * @return Book
     */
    public function current(): Book
    {
        return current($this->books);
    }

    /**
     * Advance the internal pointer of the specified property.
     *
     * @param  void
     * @return void
     */
    public function next()
    {
        next($this->books);
    }

    /**
     * Return the current key of the specified property.
     *
     * @param  void
     * @return int
     */
    public function key(): int
    {
        return key($this->books);
    }

    /**
     * Return the validity of the current position of the specified property.
     *
     * @param  void
     * @return bool
     */
    public function valid(): bool
    {
        return current($this->books) !== false;
    }

    /**
     * Set the internal pointer of the specified property to the first element.
     *
     * @param  void
     * @return void
     */
    public function rewind()
    {
        reset($this->books);
    }

    /**
     * Add the book to the book list.
     *
     * @param  Book $book
     * @return void
     */
    public function addBook(Book $book)
    {
        foreach ($this->books as $value) {
            if ($value->getTitleAndAuthor() == $book->getTitleAndAuthor()) {
                return;
            }
        }
        $this->books[] = $book;
    }

    /**
     * Remove the book from the book list.
     *
     * @param  Book   $book
     * @return void
     */
    public function removeBook(Book $book)
    {
        foreach ($this->books as $key => $value) {
            if ($value->getTitleAndAuthor() == $book->getTitleAndAuthor()) {
                unset($this->books[$key]);
            }
        }
    }
}
