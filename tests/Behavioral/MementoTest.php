<?php

use Src\Behavioral\Memento\Bookmark;
use Src\Behavioral\Memento\BookReader;

class MementoTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate memento classes
     */
    public function setUp()
    {
        $this->bookReader = new BookReader('Core PHP Programming, Third Edition', '103');
        $this->bookMark = new Bookmark($this->bookReader);
    }

    /**
     *
     * @test memento
     *
     * @return void
     */
    public function memento()
    {
        $this->assertEquals($this->bookReader->getTitle(),'Core PHP Programming, Third Edition');
        $this->assertEquals($this->bookReader->getPage(),'103');

        $this->bookReader->setPage("104");
        $this->assertEquals($this->bookReader->getPage(),'104');
        $this->bookMark->getPage($this->bookReader);
        $this->assertEquals($this->bookReader->getPage(),'103');
    }
}
