<?php

use Src\Behavioral\Command\BookCommand;
use Src\Behavioral\Command\BookCommandee;
use Src\Behavioral\Command\BookStarsOnCommand;
use Src\Behavioral\Command\BookStarsOffCommand;

class CommandTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate command class class
     */
    public function setUp()
    {
        $this->book = new BookCommandee('Design Patterns', 'Gamma, Helm, Johnson, and Vlissides');
    }

    /**
     *
     * @test
     *
     * @return void
     */
    public function command()
    {
        function callCommand(BookCommand $bookCommand_in)
        {
            $bookCommand_in->execute();
        }

        $starsOn = new BookStarsOnCommand($this->book);
        callCommand($starsOn);
        $this->assertEquals($this->book->getTitle(), 'Design*Patterns');

        $starsOff = new BookStarsOffCommand($this->book);
        callCommand($starsOff);
        $this->assertEquals($this->book->getTitle(), 'Design Patterns');
    }
}
