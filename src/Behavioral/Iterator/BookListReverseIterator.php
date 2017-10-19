<?php namespace Src\Behavioral\Iterator;

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
            return NULL;
        }
    }

    public function hasNextBook()
    {
        if (1 < $this->currentBook) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}



//while ($booksIterator->hasNextBook()) {
    //$book = $booksIterator->getNextBook();
    //writeln('getting next book with iterator :');
    //writeln($book->getAuthorAndTitle());
    //writeln('');
//}

//$book = $booksIterator->getCurrentBook();
//writeln('getting current book with iterator :');
//writeln($book->getAuthorAndTitle());
//writeln('');

//writeln('Testing the Reverse Iterator');

//$booksReverseIterator = new BookListReverseIterator($books);

//while ($booksReverseIterator->hasNextBook()) {
    //$book = $booksReverseIterator->getNextBook();
    //writeln('getting next book with reverse iterator :');
    //writeln($book->getAuthorAndTitle());
    //writeln('');
//}

//$book = $booksReverseIterator->getCurrentBook();
//writeln('getting current book with reverse iterator :');
//writeln($book->getAuthorAndTitle());
//writeln('');

//writeln('END TESTING ITERATOR PATTERN');

//function writeln($line_in)
//{
    //echo $line_in . "<br/>";
//}

