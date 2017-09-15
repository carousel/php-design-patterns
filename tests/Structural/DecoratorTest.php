<?php

use Src\HelperClasses\Book;
use Src\Structural\Decorator\BookTitleDecorator;
use Src\Structural\Decorator\BookTitleStarDecorator;
use Src\Structural\Decorator\BookTitleExclaimDecorator;



class DecoratorTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate objects
     */
    public function setUp()
    {
        $this->patternBook = new Book("Gamma, Helm, Johnson, and Vlissides", 'Design Patterns');
        $this->decorator = new BookTitleDecorator($this->patternBook);
        $this->starDecorator = new BookTitleStarDecorator($this->decorator);
        $this->exclaimDecorator = new BookTitleExclaimDecorator($this->decorator);
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
        $this->assertEquals($this->decorator->showTitle(), "!Design Patterns!");
    }
}
