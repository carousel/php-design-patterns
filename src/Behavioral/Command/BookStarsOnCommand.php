<?php

namespace Src\Behavioral\Command;

class BookStarsOnCommand extends BookCommand
{
    public function execute()
    {
        $this->bookCommandee->setStarsOn();
    }
}
