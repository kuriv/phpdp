<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Structural\Adapter;

use PHPUnit\Framework\TestCase;
use PHPDesignPatterns\Structural\Adapter\Book;
use PHPDesignPatterns\Structural\Adapter\Kindle;
use PHPDesignPatterns\Structural\Adapter\EBookAdapter;

class AdapterTest extends TestCase
{
    public function testCanTurnPageOnBook()
    {
        $book = new Book;
        $book->open();
        $book->turnPage();

        $this->assertSame(2, $book->getPage());
    }

    public function testCanTurnPageOnKindleLikeInANormalBook()
    {
        $kindle = new kindle;
        $book = new EBookAdapter($kindle);

        $book->open();
        $book->turnPage();

        $this->assertSame(2, $book->getPage());
    }
}
