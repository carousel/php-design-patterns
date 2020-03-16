<?php 

use Creational\AbstractFactory\OReillyBookFactory;
use Creational\AbstractFactory\OReillyMySQLBook;
use Creational\AbstractFactory\OReillyPHPBook;

class AbstractFactoryTest extends \PHPUnit\Framework\TestCase
{
    public function setUp(): void
    {
        $this->orielly = new OReillyBookFactory();
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

    /**
     * Check do we have correct instances (subclassing)?
     *
     * @test
     */
    public function returnResults()
    {
        $this->assertEquals($this->orielly->makeMySQLBook(), new OReillyMySQLBook());
        $this->assertEquals($this->orielly->makePHPBook(), new OReillyPHPBook);
    }
}
