<?php

use Src\HelperClasses\Book;
use Src\Structural\Facade\CaseReverseFacade;

class FacadeTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate PHPDelete class
     */
    public function setUp()
    {
        $this->book = new Book("Gamma, Helm, Johnson, and Vlissides", 'Design Patterns');
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
