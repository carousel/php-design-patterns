<?php

use Src\HelperClasses\Book;
use Src\Structural\Proxy\ProxyBookList;

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
        $this->assertEquals($this->proxyBookList->getBookCount(), 1);
        $firstBook = $this->proxyBookList->getBook(1);

        $this->proxyBookList->addBook($this->secondBook);
        $this->assertEquals($this->proxyBookList->getBookCount(), 2);
        $secondBook = $this->proxyBookList->getBook(2);

        //proxy on first book
        $this->assertEquals($this->proxyBookList->getAuthor(1), 'Access forbidden!!!');
        //second book doesn't have proxy (bypass)
        $this->assertEquals($this->proxyBookList->getAuthor(2), 'Larry Truett');

        $this->proxyBookList->removeBook($firstBook);
        $this->assertEquals($this->proxyBookList->getBookCount(), 1);

    }
}
