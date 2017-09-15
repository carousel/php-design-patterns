<?php namespace Src\Structural\Decorator;

use Src\HelperClasses\Book;

class BookTitleDecorator
{
    protected $book;
    protected $title;

    public function __construct(Book $book_in)
    {
        $this->book = $book_in;
        $this->resetTitle();
    }

    //doing this so original object is not altered
    public function resetTitle()
    {
        $this->title = $this->book->getTitle();
    }

    public function showTitle()
    {
        return $this->title;
    }
}

