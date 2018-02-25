<?php

namespace Structural\Bridge;

/**
 * Class BridgeBook
 * @package Structural\Bridge
 */
abstract class BridgeBook
{
    private $bbAuthor;
    private $bbTitle;
    private $bbImp;

    /**
     * BridgeBook constructor.
     * @param $author_in
     * @param $title_in
     * @param $choice_in
     */
    public function __construct($author_in, $title_in, $choice_in)
    {
        $this->bbAuthor = $author_in;
        $this->bbTitle = $title_in;
        if ('STARS' === $choice_in) {
            $this->bbImp = new BridgeBookStarsImp();
        } else {
            $this->bbImp = new BridgeBookCapsImp();
        }
    }

    /**
     * @return string
     */
    public function showAuthor()
    {
        return $this->bbImp->showAuthor($this->bbAuthor);
    }

    /**
     * @return string
     */
    public function showTitle()
    {
        return $this->bbImp->showTitle($this->bbTitle);
    }
}
