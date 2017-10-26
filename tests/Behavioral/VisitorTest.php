<?php

use Src\Behavioral\Visitor\SoftwareVisitee;
use Src\Behavioral\Visitor\BookVisitee;
use Src\Behavioral\Visitor\PlainDescriptionVisitor;
use Src\Behavioral\Visitor\FancyDescriptionVisitor;

class VisitorTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate state classes
     */
    public function setUp()
    {
        $this->book = new BookVisitee('Design Patterns', 'Gamma, Helm, Johnson and Vlissides');
        $this->software = new SoftwareVisitee('Zend Studio', 'Zend Technologies', 'www.zend.com');
        $this->plainVisitor = new PlainDescriptionVisitor();
        $this->fancyVisitor = new FancyDescriptionVisitor();
    }

    /**
     *
     * @test
     *
     * @return void
     */
    public function visitor()
    {
        $this->acceptVisitor($this->book, $this->plainVisitor);
        $this->assertEquals($this->plainVisitor->getDescription(), 'Design Patterns. written by Gamma, Helm, Johnson and Vlissides');
        $this->acceptVisitor($this->software, $this->plainVisitor);
        $this->assertEquals($this->plainVisitor->getDescription(), 'Zend Studio. made by Zend Technologies. website at www.zend.com');

        $this->acceptVisitor($this->book, $this->fancyVisitor);
        $this->assertEquals($this->fancyVisitor->getDescription(), 'Design Patterns...!*@*! written !*! by !@! Gamma, Helm, Johnson and Vlissides');
        $this->acceptVisitor($this->software, $this->fancyVisitor);
        $this->assertEquals($this->fancyVisitor->getDescription(), 'Zend Studio...!!! made !*! by !@@! Zend Technologies...www website !**! at http://www.zend.com');
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
