<?php

namespace Structural\Composite;

class SeveralBooks extends OnTheBookShelf
{
    private $books = array();
    private $bookCount;

    public function __construct()
    {
        $this->setBookCount(0);
    }

    public function getBookCount()
    {
        return $this->bookCount;
    }

    public function setBookCount($newCount)
    {
        $this->bookCount = $newCount;
    }

    public function getBookInfo($bookToGet)
    {
        if ($bookToGet <= $this->bookCount) {
            return $this->books[$bookToGet]->getBookInfo(1);
        } else {
            return false;
        }
    }

    public function addBook($oneBook)
    {
        $this->setBookCount($this->getBookCount() + 1);
        $this->books[$this->getBookCount()] = $oneBook;
        return $this->getBookCount();
    }

    public function removeBook($oneBook)
    {
        $counter = 0;
        while (++$counter <= $this->getBookCount()) {
            if ($oneBook->getBookInfo(1) ==
                $this->books[$counter]->getBookInfo(1)
            ) {
                for ($x = $counter; $x < $this->getBookCount(); $x++) {
                    $this->books[$x] = $this->books[$x + 1];
                }
                $this->setBookCount($this->getBookCount() - 1);
            }
        }
        return $this->getBookCount();
    }
}
