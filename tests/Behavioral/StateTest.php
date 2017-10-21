<?php

use Src\Behavioral\State\BookContext;
use Src\Behavioral\State\BookTitleStateStars;
use Src\Behavioral\State\BookTitleStateExclaim;
use Src\HelperClasses\Book;

class StateTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate state classes
     */
    public function setUp()
    {
        $this->book = new Book('Larry Truett','PHP for Cats');
        $this->bookContext = new BookContext($this->book,new BookTitleStateStars);
        $this->bookContext1 = new BookContext($this->book,new BookTitleStateExclaim);
    }

    /**
     *
     * @test
     *
     * @return void
     */
    public function state()
    {
        //check state of title
        $this->assertEquals($this->bookContext->getBookTitle(), 'PHP*for*Cats');
        //check correct state instance
        $this->assertInstanceOf( 'Src\Behavioral\State\BookTitleStateExclaim',$this->bookContext->getBookTitleState());
        //check state of title
        $this->assertEquals($this->bookContext1->getBookTitle(), 'PHP!for!Cats');
        //check correct state instance
        $this->assertInstanceOf( 'Src\Behavioral\State\BookTitleStateStars',$this->bookContext1->getBookTitleState());
    }
}
