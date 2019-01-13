<?php 

namespace Creational\FactoryMethod;

class SamsPHPBook
{
    private $author;
    private $title;
    private $subject = "PHP";
    public function __construct()
    {
        $this->author = "Rasmus Lerdorf and Kevin Tatroe\n";
        $this->title = "Programming PHP\n";
    }
}
