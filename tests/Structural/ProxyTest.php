<?php

use Src\Structural\Proxy\Book;
use Src\Structural\Proxy\ProxyBookList;

class ProxyTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate PHPDelete class
     */
    public function setUp()
    {
        $this->proxyBookList = new ProxyBookList();
        $this->inBook = new Book('PHP for Cats', 'Larry Truett');
    }

    /**
     * @test
     *
     * @return void
     */
    public function proxy()
    {
        $this->proxyBookList->addBook($this->inBook);
        $this->assertEquals($this->proxyBookList->getBookCount(), 1);

        $outBook = $this->proxyBookList->getBook(1);
        $this->proxyBookList->removeBook($outBook);
        $this->assertEquals($this->proxyBookList->getBookCount(), 0);
    }
}
