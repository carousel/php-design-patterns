<?php 

namespace Structural\Adapter;

use Helpers\Book;

class BookAdapter
{
    private $book;

    public function __construct(Book $book_in)
    {
        $this->book = $book_in;
    }

    public function getAuthorAndTitle()
    {
        return $this->book->getTitle() . ' by ' . $this->book->getAuthor();
    }
}
