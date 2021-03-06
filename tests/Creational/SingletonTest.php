<?php 

use Creational\Singleton\BookSingleton;
use Creational\Singleton\BookBorrower;

class SingletonTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function instanceIsSame()
    {
        $bookBorrower = new BookBorrower();
        $firstBook = $bookBorrower->borrowBook();
        $secondBook = $bookBorrower->borrowBook();
        $this->assertEquals($firstBook, $secondBook);
    }

}
