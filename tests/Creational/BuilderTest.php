<?php 

use Creational\Builder\HTMLPageBuilder;
use Creational\Builder\HTMLPageDirector;
use Creational\Builder\HTMLPage;

class BuilderTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate factory method
     */
    public function setUp()
    {
        $this->pageBuilder = new HTMLPageBuilder();
        $this->pageDirector = new HTMLPageDirector($this->pageBuilder);
    }

    /**
     * @test
     */
    public function finalBuiltObjectIsCorrectInstance()
    {
        $this->pageDirector->buildPage();
        $this->page = $this->pageDirector->getPage();
        $this->assertTrue($this->page instanceof HTMLPage);
    }
}
