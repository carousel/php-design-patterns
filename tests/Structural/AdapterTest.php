<?php

use Src\HelperClasses\Book;
use Src\Structural\Adapter\BookAdapter;

class AdapterTest extends \PHPUnit\Framework\TestCase
{
    public function setUp()
    {
        $this->book = new Book("Gamma, Helm, Johnson, and Vlissides", "Design Patterns");
        $this->bookAdapter = new BookAdapter($this->book);
    }

    /**
     * @test
     */
    public function adapter()
    {
        $result = $this->bookAdapter->getAuthorAndTitle();
        $stub = $this->createMock(BookAdapter::class);
        $stub->method('getAuthorAndTitle')->willReturn("Design Patterns by Gamma, Helm, Johnson, and Vlissides");
        $this->assertEquals($this->book->getTitle() . " by " . $this->book->getAuthor(), $stub->getAuthorAndTitle());
        $this->assertEquals($this->book->getTitle() . " by " . $this->book->getAuthor(), $result);
    }
}
