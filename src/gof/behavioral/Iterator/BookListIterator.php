<?php 

namespace Behavioral\Iterator;

class BookListIterator
{
    protected $bookList;
    protected $currentBook = 0;

    public function __construct(BookList $bookList_in)
    {
        $this->bookList = $bookList_in;
    }

    public function getCurrentBook()
    {
        if (($this->currentBook > 0) &&
            ($this->bookList->getBookCount() >= $this->currentBook)
        ) {
            return $this->bookList->getBook($this->currentBook);
        }
    }

    public function getNextBook()
    {
        if ($this->hasNextBook()) {
            return $this->bookList->getBook(++$this->currentBook);
        } else {
            return null;
        }
    }

    public function hasNextBook()
    {
        if ($this->bookList->getBookCount() > $this->currentBook) {
            return true;
        } else {
            return false;
        }
    }
}
