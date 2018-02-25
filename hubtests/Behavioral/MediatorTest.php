<?php

use Behavioral\Mediator\BookMediator;

class MediatorTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate command class class
     */
    public function setUp()
    {
        $this->mediator = new BookMediator('Gamma, Helm, Johnson, and Vlissides', 'Design Patterns');
    }

    /**
     *
     * @test
     *
     * @return void
     */
    public function mediator()
    {
        $author = $this->mediator->getAuthor();
        $title = $this->mediator->getTitle();
        $this->assertEquals($author->getAuthor(), 'Gamma, Helm, Johnson, and Vlissides');
        $this->assertEquals($title->getTitle(), 'Design Patterns');

        $author->setAuthorLowerCase();
        $this->assertEquals($author->getAuthor(), 'gamma, helm, johnson, and vlissides');

        $author->setAuthorUpperCase();
        $this->assertEquals($author->getAuthor(), 'GAMMA, HELM, JOHNSON, AND VLISSIDES');

        $title->setTitleLowerCase();
        $this->assertEquals($title->getTitle(), 'design patterns');

        $title->setTitleUpperCase();
        $this->assertEquals($title->getTitle(), 'DESIGN PATTERNS');
    }
}
