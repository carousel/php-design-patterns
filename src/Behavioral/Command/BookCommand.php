<?php namespace Src\Behavioral\Command;

abstract class BookCommand
{
    protected $bookCommandee;

    public function __construct($bookCommandee_in)
    {
        $this->bookCommandee = $bookCommandee_in;
    }

    abstract public function execute();
}
