<?php

namespace Src\Behavioral\State;

class BookContext
{
    private $book = null;
    private $bookTitleState = null;

    //bookList is not instantiated at construct time
    public function __construct($book_in)
    {
        $this->book = $book_in;
        $this->setTitleState(new BookTitleStateStars());
    }

    public function getBookTitle()
    {
        return $this->bookTitleState->showTitle($this);
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

