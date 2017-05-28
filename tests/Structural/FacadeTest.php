<?php

use Src\Structural\Facade\Book;
use Src\Structural\Facade\CaseReverseFacade;

class FacadeTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate PHPDelete class
     */
    public function setUp()
    {
        $this->book = new Book('Design Patterns', 'Gamma, Helm, Johnson, and Vlissides');
    }

    /**
     * @test
     *
     * @return void
     */
    public function facade()
    {
        $bookTitleReversed = CaseReverseFacade::reverseStringCase($this->book->getTitle());
        $title = $this->book->getTitle();
        $this->assertEquals($this->book->getTitle(), $title);
        $this->assertEquals($bookTitleReversed, 'dESIGN pATTERNS');
    }
}
