<?php

namespace Src\Creational\Prototype;

class Cloneable
{
    public $object1;
    public $object2;

    public function __clone()
    {
        // Force a copy of this->object, otherwise it will point to same object.
        $this->object1 = clone $this->object1;
        return $this->object1;
    }
}
