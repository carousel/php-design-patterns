<?php namespace Test\Creational;

use Creational\FactoryMethod\OReillyFactoryMethod;
use Creational\FactoryMethod\OReillyPHPBook;
use Creational\FactoryMethod\SamsPHPBook;

class FactoryMethodTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate factory method
     */
    public function setUp()
    {
        $this->factoryMethod = new OReillyFactoryMethod;
    }

    /**
     * Do we have correct instances ?
     * @test
     */
    public function factoryMethodInstance()
    {
        $this->assertTrue($this->factoryMethod->makePHPBook("oreilly") instanceof OReillyPHPBook);
        $this->assertTrue($this->factoryMethod->makePHPBook("sams") instanceof SamsPHPBook);
    }
    /**
     * @test
     */
    public function returnResults()
    {
        $this->assertEquals($this->factoryMethod->makePHPBook("oreilly"), new OReillyPHPBook);
        $this->assertEquals($this->factoryMethod->makePHPBook("sams"), new SamsPHPBook);
    }
}
