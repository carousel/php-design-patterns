<?php 

namespace Behavioral\Iterator;

class BookListReverseIterator extends BookListIterator
{
    public function __construct(BookList $bookList_in)
    {
        $this->bookList = $bookList_in;
        $this->currentBook = $this->bookList->getBookCount() + 1;
    }

    public function getNextBook()
    {
        if ($this->hasNextBook()) {
            return $this->bookList->getBook(--$this->currentBook);
        } else {
            return null;
        }
    }

    public function hasNextBook()
    {
        if (1 < $this->currentBook) {
            return true;
        } else {
            return false;
        }
    }
    public function resetBooks()
    {
        $this->currentBook = 0;
    }
}
