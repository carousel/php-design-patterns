<?php namespace Src\Structural\Decorator;

class BookTitleExclaimDecorator extends BookTitleDecorator
{
    private $btd;

    public function __construct(BookTitleDecorator $btd_in)
    {
        $this->btd = $btd_in;
    }

    public function exclaimTitle()
    {
        $this->title = "!" . $this->btd->title . "!";
    }
}


