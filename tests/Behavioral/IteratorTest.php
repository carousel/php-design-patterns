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
        $this->books = new BookList();
        $this->books->addBook($this->firstBook);
        $this->books->addBook($this->secondBook);
        $this->books->addBook($this->thirdBook);
        $this->booksIterator = new BookListIterator($this->books);
        $this->booksReverseIterator = new BookListReverseIterator($this->books);
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
        $this->assertNull($this->books->getBook('Hello World'));
        $this->booksIterator->getCurrentBook();
        $this->books->removeBook($this->booksIterator->getNextBook());
    }
    /**
    * has next book
    *
    * @test
    */
    public function hasNextBook()
    {
        $this->books->removeBook($this->booksIterator->getNextBook());
        $this->books->removeBook($this->booksIterator->getNextBook());
        $this->assertNull($this->booksIterator->getNextBook());
    }
    /**
    * reverse iterator has next book
    *
    * @test
    */
    public function reverseIteratorhasNextBook()
    {
        $this->books->removeBook($this->booksIterator->getNextBook());
        $this->books->removeBook($this->booksIterator->getNextBook());
        //var_dump($this->booksReverseIterator->hasNextBook());
        $this->booksReverseIterator->resetBooks();
        $this->assertNull($this->booksReverseIterator->getNextBook());
    }
}
