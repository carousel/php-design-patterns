<?php namespace Src\Creational\AbstractFactory;

use Src\Creational\AbstractFactory\AbstractBookFactory;
use Src\Creational\AbstractFactory\OReillyMySQLBook;
use Src\Creational\AbstractFactory\OReillyPHPBook;

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
