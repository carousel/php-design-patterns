<?php

use Src\Behavioral\Visitor\SoftwareVisitee;
use Src\Behavioral\Visitor\BookVisitee;
use Src\Behavioral\Visitor\PlainDescriptionVisitor;

class VisitorTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate state classes
     */
    public function setUp()
    {
        $this->book = new BookVisitee('Design Patterns', 'Gamma, Helm, Johnson, and Vlissides');
        $this->software = new SoftwareVisitee('Zend Studio', 'Zend Technologies', 'www.zend.com');
        $this->plainVisitor = new PlainDescriptionVisitor();
    }

    /**
     *
     * @test
     *
     * @return void
     */
    public function state()
    {
        $this->acceptVisitor($this->book,$this->plainVisitor);
        $this->acceptVisitor($this->software,$this->plainVisitor);
        $this->acceptVisitor($this->book,$this->fancyVisitor);
        $this->acceptVisitor($this->software,$this->fancyVisitor);
        //check state of title
        //$this->assertEquals($this->bookContext->getBookTitle(), 'PHP*book*title*initial');
    }
    //double dispatch any visitor and visitee objects
    public function acceptVisitor($visitee_in, $visitor_in)
    {
        $visitee_in->accept($visitor_in);
    }
}






 
  //acceptVisitor($book, $plainVisitor);
  //writeln('plain description of book: '.$plainVisitor->getDescription());
  //acceptVisitor($software, $plainVisitor);
  //writeln('plain description of software: '.$plainVisitor->getDescription());
  //writeln('');
 
  //$fancyVisitor = new FancyDescriptionVisitor();
 
  //acceptVisitor($book, $fancyVisitor);
  //writeln('fancy description of book: '.$fancyVisitor->getDescription());
  //acceptVisitor($software, $fancyVisitor);
  //writeln('fancy description of software: '.$fancyVisitor->getDescription());



