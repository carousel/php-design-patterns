<?php namespace Src\Structural\Decorator;

class BookTitleStarDecorator extends BookTitleDecorator
{
    private $btd;

    public function __construct(BookTitleDecorator $btd_in)
    {
        $this->btd = $btd_in;
    }

    public function starTitle()
    {
        $this->title = Str_replace(" ", "*", $this->btd->title);
    }
}
