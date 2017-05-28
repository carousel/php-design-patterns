<?php

use Src\Creational\Builder\HTMLPageBuilder;
use Src\Creational\Builder\HTMLPageDirector;
use Src\Creational\Builder\HTMLPage;

class BuilderTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate factory method
     */
    public function setUp()
    {
        $pageBuilder = new HTMLPageBuilder();
        $this->pageDirector = new HTMLPageDirector($pageBuilder);
    }

    /**
     * @test
     */
    public function finalBuiltObjectIsIsCorrectInstance()
    {
        $this->pageDirector->buildPage();
        $page = $this->pageDirector->getPage();
        $this->assertTrue($page instanceof HTMLPage);
    }
}
