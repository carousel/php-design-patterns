<?php 

namespace Creational\AbstractFactory;

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
}
