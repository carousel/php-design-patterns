<?php

use Src\Behavioral\Strategy\StrategyContext;
use Src\HelperClasses\Book;

class StrategyTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate strategy classes class
     */
    public function setUp()
    {
        $this->book = new Book('Larry Truett','PHP for Cats');
        $this->strategyContextC = new StrategyContext('C');
        $this->strategyContextE = new StrategyContext('E');
    }

    /**
     *
     * @test
     *
     * @return void
     */
    public function strategy()
    {
        $this->assertEquals($this->strategyContextC->showBookTitle($this->book), 'PHP FOR CATS');
        $this->assertEquals($this->strategyContextE->showBookTitle($this->book), 'PHP!for!Cats');
    }
}
