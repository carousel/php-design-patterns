<?php

use Src\Creational\FactoryMethod\OReillyFactoryMethod;
use Src\Creational\FactoryMethod\OReillyPHPBook;
use Src\Creational\FactoryMethod\SamsPHPBook;

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
}
