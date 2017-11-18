<?php namespace Src\Creational\AbstractFactory;

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
