<?php namespace Src\Creational\AbstractFactory;

class OReillyMySQLBook
{
    private $author;
    private $title;
    private $subject = "MySQL";
    public function __construct()
    {
        $this->author = 'George Reese, Randy Jay Yarger, and Tim King';
        $this->title = 'Managing and Using MySQL';
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
