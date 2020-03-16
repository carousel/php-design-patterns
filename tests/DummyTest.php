<?php

class Engine
{
    public function start()
    {
        return 'Starting a car';
    }
}

class Car
{
    public $engine;
    public function __construct(Engine $engine)
    {
        $this->engine = $engine;
    }
}


class DummyTest extends \PHPUnit\Framework\TestCase
{
    protected function setUp(): void
    {
        $mock = $this->getMockBuilder('Engine')
            ->getMock();
        $mock->expects($this->once())
            ->method('start')
            ->will($this->returnValue('Starting'));
        $this->car = new Car($mock);
    }

    /**
     * @test
     */
    public function adapter()
    {
        $this->assertEquals('Starting', $this->car->engine->start());
    }
}
