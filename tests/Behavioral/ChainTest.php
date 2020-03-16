<?php

use Behavioral\Chain\BookTopic;
use Behavioral\Chain\BookSubTopic;
use Behavioral\Chain\BookSubSubTopic;


class ChainTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate state classes
     */
    public function setUp(): void
    {
        $this->bookTopic = new BookTopic('PHP for Cats', 'Larry Truett');
        $this->bookSubTopic = new BookSubTopic('Advanced MySql', $this->bookTopic);
        $this->bookSubSubTopic = new BookSubSubTopic('DDD', $this->bookSubTopic);
    }

    /**
     *
     * @test
     *
     * @return void
     */
    public function chainOfResponsibility()
    {
        $this->assertEquals($this->bookTopic->getTopic(), 'PHP for Cats');
        $this->assertEquals($this->bookSubTopic->getTopic(), 'Advanced MySql');
        $this->assertInstanceOf(BookTopic::class,$this->bookSubTopic->getParentTopic());
        $this->bookTopic->setTitle('PHP for Cats');
        $this->assertEquals($this->bookTopic->getTitle(), 'PHP for Cats');
        $this->bookTopic->setTitle(null);
        $this->assertEquals($this->bookTopic->getTitle(), 'there is no title available');
        $this->assertEquals($this->bookSubTopic->getTitle(), 'there is no title available');
        $this->bookSubTopic->setTitle('BookSubTopic title');
        $this->assertEquals($this->bookSubTopic->getTitle(), 'BookSubTopic title');


        $this->assertInstanceOf(BookSubTopic::class,$this->bookSubSubTopic->getParentTopic());
        $this->bookSubTopic->setTitle(null);
        $this->assertEquals($this->bookSubTopic->getTitle(), 'there is no title available');
        $this->assertEquals($this->bookSubSubTopic->getTitle(), 'there is no title available');
        $this->bookSubSubTopic->setTitle('BookSubSubTopic title');
        $this->assertEquals($this->bookSubSubTopic->getTitle(), 'BookSubSubTopic title');
        $this->assertEquals($this->bookSubSubTopic->getTopic(), 'DDD');
    }
}
