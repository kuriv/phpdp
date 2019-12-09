<?php

namespace PHPDesignPatterns\Behavioral\Iterator;

use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{
    public function testCanAddBookToList()
    {
        $book = new Book('Clean Code', 'Robert C. Martin');
        $bookList = new BookList();
        $bookList->addBook($book);
        $bookList->addBook($book);
        $this->assertCount(1, $bookList);
    }

    public function testCanRemoveBookFromList()
    {
        $book = new Book('Clean Code', 'Robert C. Martin');
        $bookList = new BookList();
        $bookList->addBook($book);
        $bookList->removeBook($book);
        $this->assertCount(0, $bookList);
    }

    public function testCanIterateOverBookList()
    {
        $bookList = new BookList();
        $bookList->addBook(new Book('Learning PHP Design Patterns', 'William Sanders'));
        $bookList->addBook(new Book('Professional Php Design Patterns', 'Aaron Saray'));
        $bookList->addBook(new Book('Clean Code', 'Robert C. Martin'));
        foreach ($bookList as $book) {
            $books[] = $book->getTitleAndAuthor();
        }
        $this->assertSame([
            'Learning PHP Design Patterns by William Sanders',
            'Professional Php Design Patterns by Aaron Saray',
            'Clean Code by Robert C. Martin'
        ], $books);
    }

    public function testCanIterateOverBookListAfterRemovingBook()
    {
        $firstBook = new Book('Clean Code', 'Robert C. Martin');
        $secondBook = new Book('Professional Php Design Patterns', 'Aaron Saray');
        $bookList = new BookList();
        $bookList->addBook($firstBook);
        $bookList->addBook($secondBook);
        $bookList->removeBook($firstBook);
        foreach ($bookList as $book) {
            $books[] = $book->getTitleAndAuthor();
        }
        $this->assertSame([
            'Professional Php Design Patterns by Aaron Saray'
        ], $books);
    }
}
