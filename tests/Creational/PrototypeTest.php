<?php

use Src\Creational\Prototype\Cloneable;
use Src\Creational\Prototype\SubObject;

class PrototypeTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate factory method
     */
    public function setUp()
    {
        $this->obj = new Cloneable();

        $this->obj->object1 = new SubObject();
        $this->obj->object2 = new SubObject();
    }

    /**
     * @test
     */
    public function prototypeInstancesAreEqueal()
    {
        $this->assertEquals($this->obj->object2, $this->obj->object2);
    }
}
