<?php namespace Test\Creational;

use Src\Creational\Singleton\BookBorrower;
use Src\Creational\Singleton\BookSingleton;

class SingletonTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate factory method
     */
    public function setUp()
    {
        $this->bookBorrower = new BookBorrower();
    }
    /**
     * @test
     */
    public function bookIsBorrowedAndReturned()
    {
        $this->bookBorrower->borrowBook();
        $firstBook = new \ReflectionProperty('\Src\Creational\Singleton\BookBorrower', 'borrowedBook');
        $r = new \ReflectionProperty('\Src\Creational\Singleton\BookSingleton', 'isLoanedOut');
        $r->setAccessible(true);
        $this->assertTrue($r->getValue());
        $secondBook = new \ReflectionProperty('\Src\Creational\Singleton\BookBorrower', 'borrowedBook');
        $this->bookBorrower->returnBook();
        $this->assertFalse($r->getValue());
        //check that singletons are equals
        $this->assertEquals($firstBook, $secondBook);
    }
}
