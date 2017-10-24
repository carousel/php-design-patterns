<?php namespace Src\Behavioral\Visitor;

abstract class Visitor
{
    abstract public function visitBook(BookVisitee $bookVisitee_In);
    abstract public function visitSoftware(SoftwareVisitee $softwareVisitee_In);
}
