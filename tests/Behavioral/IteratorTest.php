<?php

use Src\Behavioral\Iterator\BookList;
use Src\Behavioral\Iterator\BookListIterator;
use Src\Behavioral\Iterator\BookListReverseIterator;
use Src\HelperClasses\Book;

class IteratorTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate state classes
     */
    public function setUp()
    {
        $this->firstBook = new Book('Core PHP Programming, Third Edition', 'Atkinson and Suraski');
        $this->secondBook = new Book('PHP Bible', 'Converse and Park');
        $this->thirdBook = new Book('Design Patterns', 'Gamma, Helm, Johnson, and Vlissides');
        $books = new BookList();
        $books->addBook($this->firstBook);
        $books->addBook($this->secondBook);
        $books->addBook($this->thirdBook);
        $this->booksIterator = new BookListIterator($books);
        $this->booksReverseIterator = new BookListReverseIterator($books);
    }

    /**
     *
     * @test
     *
     * @return void
     */
    public function iterator()
    {
        $current = $this->booksIterator->getCurrentBook();
        $this->assertNull($current);
        $next = $this->booksIterator->getNextBook();
        $this->assertEquals($next->getTitle(), 'Atkinson and Suraski');

        $currentReverse = $this->booksReverseIterator->getCurrentBook();
        $this->assertNull($currentReverse);
        $reverseNext = $this->booksReverseIterator->getNextBook();
        $this->assertEquals($reverseNext->getTitle(), 'Gamma, Helm, Johnson, and Vlissides');
    }
}
