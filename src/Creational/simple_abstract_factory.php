<?php

abstract class AbstractBookFactory
{
    abstract public function makePHPBook();

    abstract public function makeMySQLBook();
}

class OReillyBookFactory extends AbstractBookFactory
{
    private $context = "OReilly";

    public function makeMySQLBook()
    {
        return new OReillyMySQLBook;
    }

    public function makePHPBook()
    {
        return new OReillyPHPBook;
    }
}


abstract class AbstractMySQLBook
{
    private $subject = "MySQL";
}

class OReillyMySQLBook extends AbstractMySQLBook
{
    private $author;
    private $title;

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

abstract class AbstractPHPBook
{
    private $subject = "PHP";
}

class OReillyPHPBook extends AbstractPHPBook
{
    private $author;
    private $title;
    private static $oddOrEven = 'odd';

    public function __construct()
    {
        //alternate between 2 books
        if ('odd' == self::$oddOrEven) {
            $this->author = 'Rasmus Lerdorf and Kevin Tatroe';
            $this->title = 'Programming PHP';
            self::$oddOrEven = 'even';
        } else {
            $this->author = 'David Sklar and Adam Trachtenberg';
            $this->title = 'PHP Cookbook';
            self::$oddOrEven = 'odd';
        }
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


