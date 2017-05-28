<?php

use Src\Structural\Bridge\BridgeBookAuthorTitle;
use Src\Structural\Bridge\BridgeBookTitleAuthor;

class BridgeTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     *
     * @return void
     */
    public function bridge()
    {
        //first implementation with same interface
        $book = new BridgeBookAuthorTitle('Larry Truett', "PHP for Cats", 'CAPS');
        $this->assertEquals($book->showAuthorTitle(), "LARRY TRUETT's PHP FOR CATS");

        //second implementation with same interface
        $book = new BridgeBookTitleAuthor('Larry Truett', "PHP for Cats", 'STARS');
        $this->assertEquals($book->showTitleAuthor(), "PHP*for*Cats by Larry*Truett");
    }
}
