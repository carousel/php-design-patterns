<?php

use Src\Behavioral\Chain\BookTopic;
use Src\Behavioral\Chain\BookSubTopic;
use Src\Behavioral\Chain\BookSubSubTopic;
use Src\HelperClasses\Book;

class ChainTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate state classes
     */
    public function setUp()
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
    public function chain()
    {
        $this->assertEquals($this->bookTopic->getTopic(), 'PHP for Cats');
        $this->assertEquals($this->bookSubTopic->getTopic(), 'Advanced MySql');
        $this->assertEquals($this->bookSubTopic->getTitle(), 'there is no title available');
        $this->bookSubTopic->setTitle('BookSubTopic title');
        $this->assertEquals($this->bookSubTopic->getTitle(), 'BookSubTopic title');
        $this->assertEquals($this->bookSubSubTopic->getTopic(), 'DDD');
    }
}
