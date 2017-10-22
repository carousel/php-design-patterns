<?php

use Src\Behavioral\State\BookContext;
use Src\Behavioral\State\BookTitleStateStars;
use Src\Behavioral\State\BookTitleStateExclaim;
use Src\Behavioral\State\BookTitleStateQuestionMark;
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
        $this->bookContext2 = new BookContext($this->book,new BookTitleStateQuestionMark);
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
        $this->assertInstanceOf( 'Src\Behavioral\State\BookTitleStateQuestionMark',$this->bookContext1->getBookTitleState());
        //check state of title
        $this->assertEquals($this->bookContext2->getBookTitle(), 'PHP?for?Cats');
        //check correct state instance
        $this->assertInstanceOf( 'Src\Behavioral\State\BookTitleStateQuestionMark',$this->bookContext2->getBookTitleState());
    }
}
