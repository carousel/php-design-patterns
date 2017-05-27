<?php

namespace Src\Creational\AbstractFactory;

abstract class AbstractBookFactory
{
    abstract public function makePHPBook();

    abstract public function makeMySQLBook();
}




