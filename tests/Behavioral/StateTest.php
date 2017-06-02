<?php

use Src\Behavioral\State\BookContext;
use Src\Behavioral\State\Book;

class StateTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate state classes
     */
    public function setUp()
    {
        $this->book = new Book('PHP for Cats', 'Larry Truett');
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
