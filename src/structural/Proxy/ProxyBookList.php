<?php 

namespace Structural\Proxy;

class ProxyBookList
{
    private $bookList = null;

    public function getBookCount()
    {
        if (null == $this->bookList) {
            $this->makeBookList();
        }
        return $this->bookList->getBookCount();
    }

    public function addBook($book)
    {
        if (null == $this->bookList) {
            $this->makeBookList();
        }
        return $this->bookList->addBook($book);
    }

    public function getBook($bookNum)
    {
        if (null == $this->bookList) {
            $this->makeBookList();
        }
        return $this->bookList->getBook($bookNum);
    }

    public function removeBook($book)
    {
        if (null == $this->bookList) {
            $this->makeBookList();
        }
        return $this->bookList->removeBook($book);
    }

    //Create
    public function makeBookList()
    {
        $this->bookList = new BookList();
    }
    public function removeBookList()
    {
        $this->bookList = null;
    }
    public function getAuthor($bookNumber)
    {
        if ($bookNumber == 1) {
            return 'Access forbidden!!!';
        } else {
            return $this->getBook($bookNumber)->getAuthor();
        }
    }
}
