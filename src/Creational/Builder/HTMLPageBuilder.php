<?php

namespace Src\Creational\Builder;

class HTMLPageBuilder extends AbstractPageBuilder
{
    private $page = null;

    public function __construct()
    {
        $this->page = new HTMLPage();
    }

    public function setTitle($title_in)
    {
        $this->page->setTitle($title_in);
    }

    public function setHeading($heading_in)
    {
        $this->page->setHeading($heading_in);
    }

    public function setText($text_in)
    {
        $this->page->setText($text_in);
    }

    public function formatPage()
    {
        $this->page->formatPage();
    }

    public function getPage()
    {
        return $this->page;
    }
}
