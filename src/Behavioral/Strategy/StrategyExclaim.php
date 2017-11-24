<?php namespace Src\Behavioral\Strategy;

class StrategyExclaim implements StrategyInterface
{
    public $titleCount;

    public function showTitle($book_in)
    {
        $title = $book_in->getTitle();
        return Str_replace(' ', '!', $title);
    }
}
