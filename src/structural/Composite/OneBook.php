<?php

namespace Structural\Composite;

class OneBook extends OnTheBookShelf
{
    private $title;
    private $author;

    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function getBookInfo($bookToGet)
    {
        if (1 == $bookToGet) {
            return $this->title . " by " . $this->author;
        } else {
            return false;
        }
    }

    public function getBookCount()
    {
        return 1;
    }

    public function setBookCount($newCount)
    {
        return false;
    }

    public function addBook($oneBook)
    {
        return false;
    }

    public function removeBook($oneBook)
    {
        return false;
    }
}
