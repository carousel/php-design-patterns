<?php 

namespace Creational\FactoryMethod;

abstract class AbstractPHPBook
{
    protected abstract function getAuthor();
    protected abstract function getTitle();
};
