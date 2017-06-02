<?php

namespace Src\Behavioral\Mediator;

abstract class BookColleague
{
    private $mediator;

    public function __construct($mediator_in)
    {
        $this->mediator = $mediator_in;
    }

    public function getMediator()
    {
        return $this->mediator;
    }

    public function changed($changingClassIn)
    {
        getMediator()->titleChanged($changingClassIn);
    }
}


