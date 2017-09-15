<?php namespace Src\HelperClasses;

class Book
{
    private $author;
    private $title;

    public function __construct($author_in, $title_in)
    {
        $this->author = $author_in;
        $this->title = $title_in;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function getAuthorAndTitle()
    {
    }
    public function getTitleAndAuthor()
    {
    }

}
