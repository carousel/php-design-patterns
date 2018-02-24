<?php namespace Src\Behavioral\Command;

abstract class BookCommand
{
    protected $bookCommandee;

    /**
     * BookCommand constructor.
     */
    public function __construct($bookCommandeeIn)
    {
        $this->bookCommandee = $bookCommandeeIn;
    }

    abstract public function execute();
}
