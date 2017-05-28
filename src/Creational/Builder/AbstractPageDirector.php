<?php

namespace Src\Creational\Builder;

abstract class AbstractPageDirector
{
    abstract public function __construct(AbstractPageBuilder $builder_in);

    abstract public function buildPage();

    abstract public function getPage();
}



