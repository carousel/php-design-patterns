<?php

namespace Src\Behavioral\State;

class BookTitleStateExclaim implements BookTitleStateInterface
{
    private $titleCount = 0;

    public function showTitle($context_in)
    {
        $title = $context_in->getBook()->getTitle();
        $this->titleCount++;
        $context_in->setTitleState(new BookTitleStateStars());
        return Str_replace(' ', '!', $title);
    }
}

