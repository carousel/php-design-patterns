<?php

use Structural\Composite\OneBook;
use Structural\Composite\SeveralBooks;

class CompositeTest extends \PHPUnit\Framework\TestCase
{
    public function setUp(): void
    {
        $this->firstBook = new OneBook('Core PHP Programming, Third Edition', 'Atkinson and Suraski');
        $this->secondBook = new OneBook('PHP Bible', 'Converse and Park');
        $this->thirdBook = new OneBook('Design Patterns', 'Gamma, Helm, Johnson, and Vlissides');
        $this->books = new SeveralBooks();
    }

    /**
     * @test
     *
     * @return void
     */
    public function composite()
    {
        //one book and collection of books have same interface
        $booksCount = $this->books->addBook($this->firstBook);
        $this->assertEquals($booksCount, 1);
        $firstBookCount = $this->firstBook->getBookCount();
        $this->assertEquals($firstBookCount, 1);

        $booksCount = $this->books->addBook($this->secondBook);
        $this->assertEquals($booksCount, 2);
        $secondBookCount = $this->secondBook->getBookCount();
        $this->assertEquals($secondBookCount, 1);

        $booksCount = $this->books->addBook($this->thirdBook);
        $this->assertEquals($booksCount, 3);
        $thirdBookCount = $this->thirdBook->getBookCount();
        $this->assertFalse($this->thirdBook->setBookCount(123));
        $this->assertFalse($this->thirdBook->addBook($this->firstBook));
        $this->assertFalse($this->thirdBook->removeBook($this->firstBook));
        $this->assertFalse($this->thirdBook->getBookInfo(112));
        $this->assertEquals($this->books->getBookInfo(1),'Core PHP Programming, Third Edition by Atkinson and Suraski');
        $this->assertFalse($this->books->getBookInfo(123));
        $this->assertEquals($thirdBookCount, 1);

        $booksCount = $this->books->removeBook($this->thirdBook);
        $booksCount = $this->books->removeBook($this->firstBook);
        $this->assertEquals($booksCount, 1);
    }
}
