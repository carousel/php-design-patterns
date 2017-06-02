<?php

namespace Src\Behavioral\State;

class BookTitleStateStars implements BookTitleStateInterface
{
    private $titleCount = 0;

    public function showTitle($context_in)
    {
        $title = $context_in->getBook()->getTitle();
        $this->titleCount++;
        if (1 < $this->titleCount) {
            $context_in->setTitleState(new BookTitleStateStars);
        }
        return Str_replace(' ', '*', $title);
    }
}

