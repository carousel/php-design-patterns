<?php

use Structural\Decorator\BookTitleDecorator;
use Structural\Decorator\BookTitleStarDecorator;
use Structural\Decorator\BookTitleExclaimDecorator;
use Helpers\Book;

class DecoratorTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate objects
     */
    public function setUp(): void
    {
        $this->patternBook = new Book("Gamma, Helm, Johnson, and Vlissides", 'Design Patterns');
        $this->decorator = new BookTitleDecorator($this->patternBook);
        $this->starDecorator = new BookTitleStarDecorator($this->decorator);
        //$this->starDecorator = new BookTitleStarDecorator($this->exclaimDecorator->exclaimTitle());
        $this->exclaimDecorator = new BookTitleExclaimDecorator($this->starDecorator->starTitle());
    }
    /**
     * @test
     *
     * @return void
     */
    public function decorator()
    {
        $this->assertEquals($this->decorator->showTitle(), "Design Patterns");
        $this->exclaimDecorator->exclaimTitle();
        $this->assertEquals($this->exclaimDecorator->showTitle(), "!!!***Design Patterns***!!!");
    }
}
