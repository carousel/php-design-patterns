<?php namespace Test\Creational;

use Src\Creational\AbstractFactory\OReillyBookFactory;
use Src\Creational\AbstractFactory\OReillyMySQLBook;
use Src\Creational\AbstractFactory\OReillyPHPBook;



class AbstractFactoryTest extends \PHPUnit\Framework\TestCase
{
    public function setUp()
    {
        $this->orielly = new OReillyBookFactory;
    }

    /**
     * Check do we have correct instances (subclassing)?
     *
     * @test
     */
    public function abstractFactoryInstance()
    {
        $this->assertTrue($this->orielly->makeMySQLBook() instanceof OReillyMySQLBook);
        $this->assertTrue($this->orielly->makePHPBook() instanceof OReillyPHPBook);
    }

}
