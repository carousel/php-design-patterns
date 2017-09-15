<?php

use Src\Behavioral\State\BookContext;
use Src\HelperClasses\Book;

class StateTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate state classes
     */
    public function setUp()
    {
        $this->book = new Book('Larry Truett','PHP for Cats');
        $this->bookContext = new BookContext($this->book);
    }

    /**
     *
     * @test
     *
     * @return void
     */
    public function strategy()
    {
        $this->assertEquals($this->bookContext->getBookTitle($this->book), 'PHP*for*Cats');
    }
}
