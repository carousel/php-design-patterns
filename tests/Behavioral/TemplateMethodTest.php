<?php

use Src\Behavioral\TemplateMethod\TemplateStars;
use Src\HelperClasses\Book;

class TemplateMethodTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate template method setup classes
     */
    public function setUp()
    {
        $this->book = new Book('Larry Truett', 'PHP for Cats');
        $this->book1 = new Book(null, 'PHP for Cats');
        $this->templateStars = new TemplateStars();
    }

    /**
     *
     * @test
     *
     * @return void
     */
    public function templateMethod()
    {
        $this->assertEquals($this->templateStars->showBookTitleInfo($this->book), 'PHP*for*Cats by Larry Truett');
        $this->assertEquals($this->templateStars->showBookTitleInfo($this->book1), 'PHP*for*Cats');
    }
}
