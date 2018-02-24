<?php 

namespace Creational\FactoryMethod;

class OReillyFactoryMethod extends AbstractFactoryMethod
{
    public function makePHPBook($param)
    {
        if ($param == "oreilly") {
            $book = new OReillyPHPBook;
        }
        if ($param == "sams") {
            $book = new SamsPHPBook;
        }
        return $book;
    }
}
