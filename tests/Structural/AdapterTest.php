<?php

use Structural\Adapter\BookAdapter;
use Helpers\Book;

class AdapterTest extends \PHPUnit\Framework\TestCase
{
    public function setUp(): void
    {
        $this->book = new Book("Gamma, Helm, Johnson, and Vlissides", "Design Patterns");
        $this->bookAdapter = new BookAdapter($this->book);
    }

    /**
     * @test
     */
    public function adapter()
    {
        $this->result = $this->bookAdapter->getAuthorAndTitle();
        $this->stub = $this->createMock(BookAdapter::class);
        $this->stub->method('getAuthorAndTitle')->willReturn("Design Patterns by Gamma, Helm, Johnson, and Vlissides");
        $this->assertEquals($this->book->getTitle() . " by " . $this->book->getAuthor(), $this->stub->getAuthorAndTitle());
        $this->assertEquals($this->book->getTitle() . " by " . $this->book->getAuthor(), $this->result);
    }
}
