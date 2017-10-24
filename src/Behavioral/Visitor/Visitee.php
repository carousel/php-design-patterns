<?php namespace Src\Behavioral\Visitor;

abstract class Visitee
{
    abstract public function accept(Visitor $visitorIn);
}
