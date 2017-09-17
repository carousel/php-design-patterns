<?php namespace Src\Creational\FactoryMethod;

use Src\Creational\FactoryMethod\AbstractFactoryMethod;

class OReillyFactoryMethod extends AbstractFactoryMethod
{
    private $context = "OReilly";

    public function makePHPBook($param)
    {
        $book = null;
        switch ($param) {
            case "oreilly":
                $book = new OReillyPHPBook;
                break;
            case "sams":
                $book = new SamsPHPBook;
                break;
            default:
                $book = new OReillyPHPBook;
                break;
        }
        return $book;
    }
}


