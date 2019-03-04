<?php

abstract class AbstractBookFactory
{
    abstract public function makePHPBook();

    abstract public function makeMySQLBook();
}

class OReillyBookFactory extends AbstractBookFactory
{
    /**
     * @return OReillyMySQLBook
     */
    public function makeMySQLBook()
    {
        return new OReillyMySQLBook();
    }

    /**
     * @return OReillyPHPBook
     */
    public function makePHPBook()
    {
        return new OReillyPHPBook;
    }
}

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

class OReillyPHPBook
{
    private $author;
    private $title;
    private static $oddOrEven = 'odd';
    private $subject = "PHP";

    public function __construct()
    {
        $this->author = 'Rasmus Lerdorf and Kevin Tatroe';
        $this->title = 'Programming PHP';
    }
}

$factory = new OReillyBookFactory();