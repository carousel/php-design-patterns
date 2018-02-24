<?php

namespace Behavioral\State;

class BookTitleStateStars implements BookTitleStateInterface
{
    private $titleCount = 0;

    public function showTitle($context_in)
    {
        //$title = $context_in->getBook()->getTitle();
        $title = $context_in->getInitialState();
        $context_in->setTitleState(new BookTitleStateExclaim);
        return Str_replace(' ', '*', $title);
    }
}
