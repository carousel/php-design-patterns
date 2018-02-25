<?php

use Behavioral\State\BookContext;
use Behavioral\State\BookTitleStateStars;
use Behavioral\State\BookTitleStateExclaim;
use Behavioral\State\BookTitleStateQuestionMark;
use Helpers\Book;


class StateTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate state classes
     */
    public function setUp()
    {
        $this->book = new Book('Larry Truett','PHP book title initial');
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
        $this->assertEquals($this->bookContext->getBookTitle(), 'PHP*book*title*initial');
        //check correct state instance
        $this->assertInstanceOf( 'Behavioral\State\BookTitleStateExclaim',$this->bookContext->getBookTitleState());
        //check state of title
        $this->assertEquals($this->bookContext1->getBookTitle(), 'PHP!book!title!initial');
        //check correct state instance
        $this->assertInstanceOf( 'Behavioral\State\BookTitleStateQuestionMark',$this->bookContext1->getBookTitleState());
        //check state of title
        $this->assertEquals($this->bookContext2->getBookTitle(), 'PHP?book?title?initial');
        //check correct state instance
        $this->assertInstanceOf( 'Behavioral\State\BookTitleStateQuestionMark',$this->bookContext2->getBookTitleState());
    }
}
