<?php

use Structural\Proxy\ProxyBookList;
use Helpers\Book;

class ProxyTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate PHPDelete class
     */
    public function setUp()
    {
        $this->proxyBookList = new ProxyBookList();
        $this->firstBook = new Book('LARRY TRUETT','PHP for Cats');
        $this->secondBook = new Book('Larry Truett','PHP for Cats');
    }

    /**
     * @test
     *
     * @return void
     */
    public function proxy()
    {
        $this->proxyBookList->addBook($this->firstBook);
        $this->proxyBookList->removeBookList();
        $this->assertEquals($this->proxyBookList->getBookCount(), 0);

        //$this->proxyBookList->addBook($this->firstBook);
        $this->proxyBookList->removeBookList();
        $firstBook = $this->proxyBookList->getBook(1);
        $this->assertEquals($this->proxyBookList->getBookCount(), 0);
        $this->proxyBookList->addBook($this->firstBook);


        //proxy on first book
        $this->assertEquals($this->proxyBookList->getAuthor(1), 'Access forbidden!!!');
        //second book doesn't have proxy (bypass)
        $this->proxyBookList->addBook($this->secondBook);
        $this->assertEquals($this->proxyBookList->getAuthor(2), 'Larry Truett');
        $this->proxyBookList->removeBook($this->secondBook);

        $firstBook = $this->proxyBookList->getBook(1);
        $this->proxyBookList->removeBookList();
        $this->proxyBookList->removeBook($firstBook);
        $this->assertEquals($this->proxyBookList->getBookCount(), 0);

    }
}
