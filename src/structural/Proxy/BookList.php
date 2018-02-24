<?php

namespace Structural\Proxy;
use Helpers\Book;

class BookList
{
    private $books = array();
    private $bookCount = 0;

    public function getBookCount()
    {
        return $this->bookCount;
    }

    private function setBookCount($newCount)
    {
        $this->bookCount = $newCount;
    }

    public function getBook($bookNumberToGet)
    {
        if ((is_numeric($bookNumberToGet)) && ($bookNumberToGet <= $this->getBookCount())) {
            return $this->books[$bookNumberToGet];
        } else {
            return null;
        }
    }

    public function addBook(Book $book_in)
    {
        $this->setBookCount($this->getBookCount() + 1);
        $this->books[$this->getBookCount()] = $book_in;
        return $this->getBookCount();
    }

    public function removeBook(Book $book_in)
    {
        $counter = 0;
        while (++$counter <= $this->getBookCount()) {
            if ($book_in->getAuthorAndTitle() == $this->books[$counter]->getAuthorAndTitle()) {
                $this->setBookCount($this->getBookCount() - 1);
            }
        }
        return $this->getBookCount();
    }
}
