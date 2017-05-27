<?php

namespace Src\Creational\FactoryMethod;

use Src\Creational\FactoryMethod\AbstractPHPBook;

class OReillyPHPBook extends AbstractPHPBook
{
    private $author;
    private $title;
    private static $oddOrEven = 'odd';
    private $subject = "PHP";

    public function __construct()
    {
//alternate between 2 books
        if ('odd' == self::$oddOrEven) {
            $this->author = "Rasmus Lerdorf and Kevin Tatroe\n";
            $this->title = "Programming PHP\n";
            self::$oddOrEven = "even\n";
        } else {
            $this->author = "David Sklar and Adam Trachtenberg\n";
            $this->title = "PHP Cookbook\n";
            self::$oddOrEven = "odd\n";
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