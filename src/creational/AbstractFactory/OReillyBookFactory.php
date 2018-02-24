<?php

namespace Creational\AbstractFactory;

class OReillyBookFactory extends AbstractBookFactory
{
    private $context = "OReilly";

    /**
     * @return \Src\Creational\AbstractFactory\OReillyMySQLBook
     */
    public function makeMySQLBook()
    {
        return new OReillyMySQLBook;
    }

    /**
     * @return \Src\Creational\AbstractFactory\OReillyPHPBook
     */
    public function makePHPBook()
    {
        return new OReillyPHPBook;
    }
}
