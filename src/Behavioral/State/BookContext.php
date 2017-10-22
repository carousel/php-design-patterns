<?php namespace Src\Behavioral\State;

class BookContext
{
    private $book = null;
    private $bookTitleState = null;

    //bookList is not instantiated at construct time
    public function __construct($book_in,$stateObject)
    {
        $this->book = $book_in;
        $this->setTitleState($stateObject);
    }

    public function getBookTitle()
    {
        return $this->bookTitleState->showTitle($this);
    }
    public function getBookTitleState()
    {
        return $this->bookTitleState;
    }
    public function getInitialState()
    {
        return 'PHP book title initial';
    }

    public function getBook()
    {
        return $this->book;
    }

    public function setTitleState($titleState_in)
    {
        $this->bookTitleState = $titleState_in;
    }
}
