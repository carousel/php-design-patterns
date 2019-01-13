<?php 

namespace Behavioral\Visitor;

abstract class Visitee
{
    abstract public function accept(Visitor $visitorIn);
}
