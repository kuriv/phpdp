<?php

namespace PHPDesignPatterns\Behavioral\Iterator;

class Book
{
    /**
     * Store the book title.
     *
     * @var string
     */
    private $title;

    /**
     * Store the book author.
     *
     * @var string
     */
    private $author;

    /**
     * Store the book title and book author to the current instance.
     *
     * @param  string $title
     * @param  string $author
     * @return void
     */
    public function __construct(string $title, string $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    /**
     * Get the book title.
     *
     * @param  void
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Get the book author.
     *
     * @param  void
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * Get the book title and book author.
     *
     * @param  void
     * @return string
     */
    public function getTitleAndAuthor(): string
    {
        return $this->getTitle() . ' by ' . $this->getAuthor();
    }
}
