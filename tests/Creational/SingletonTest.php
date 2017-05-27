<?php

use Src\Creational\Singleton\BookBorrower;
use Src\Creational\Singleton\BookSingleton;

class SingletonTest extends \PHPUnit\Framework\TestCase
{
    /**
    * Instantiate factory method
    */
    public function setUp()
    {
        $this->bookBorrower1 = new BookBorrower();
        $this->bookBorrower2 = new BookBorrower();
    }
    /**
     * @test
     */
    public function singletonInstance()
    {
        $this->assertTrue($this->bookBorrower1 instanceof BookBorrower);
    }
    /**
     * @test
     */
    public function singletonInstancesAreEqueal()
    {
        $this->assertEquals($this->bookBorrower1,$this->bookBorrower2);
    }
}
