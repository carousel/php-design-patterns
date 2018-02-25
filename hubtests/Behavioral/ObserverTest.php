<?php

use Behavioral\Observer\PatternObserver;
use Behavioral\Observer\PatternSubject;

class ObserverTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate obserser class class
     */
    public function setUp()
    {
        $this->patternGossiper = new PatternSubject();
        $this->patternGossipFan = new PatternObserver();
    }

    /**
     *
     * @test
     *
     * @return void
     */
    public function observer()
    {
        $this->patternGossiper->attach($this->patternGossipFan);

        $this->patternGossiper->updateFavorites('abstract factory, decorator, visitor');
        $this->assertEquals($this->patternGossiper->getFavorites(), 'abstract factory, decorator, visitor');

        $this->patternGossiper->updateFavorites('abstract factory, observer, decorator');
        $this->assertEquals($this->patternGossiper->getFavorites(), 'abstract factory, observer, decorator');

        $this->patternGossiper->detach($this->patternGossipFan);
        $this->patternGossiper->updateFavorites('abstract factory, observer, paisley');
        $this->assertEquals($this->patternGossiper->getFavorites(), 'abstract factory, observer, paisley');
    }
}
