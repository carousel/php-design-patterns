<?php namespace Src\Behavioral\Strategy;

class StrategyCaps implements StrategyInterface
{
    public $titleCount;

    public function showTitle($book_in)
    {
        $title = $book_in->getTitle();
        $this->titleCount++;
        return strtoupper($title);
    }
}



