# Adapter

To translate one interface for a class into a compatible interface. An adapter allows classes to work together that normally could not because of incompatible interfaces by providing its interface to clients while using the original interface.

## UML



## Code

BookInterface.php

```php
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

```

Book.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Structural\Adapter;

class Book implements BookInterface
{
    /**
     * Current page.
     *
     * @var int
     */
    private $page;

    /**
     * Open a book from the beginning.
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

```

KindleInterface.php

```php
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

```

Kindle.php

```php
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

```

EBookAdapter.php

```php
<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Structural\Adapter;

class EBookAdapter implements BookInterface
{
    /**
     * Instance that needs to be adapted.
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

```

## Test

AdapterTest.php

```php
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

```