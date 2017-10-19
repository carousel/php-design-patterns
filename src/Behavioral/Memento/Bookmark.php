<?php  namespace Src\Behavioral\Memento;

class Bookmark
{
    private $title;
    private $page;

    public function __construct(BookReader $bookReader)
    {
        $this->setPage($bookReader);
        $this->setTitle($bookReader);
    }

    public function getPage(BookReader $bookReader)
    {
        $bookReader->setPage($this->page);
    }

    public function setPage(BookReader $bookReader)
    {
        $this->page = $bookReader->getPage();
    }

    public function getTitle(BookReader $bookReader)
    {
        $bookReader->setTitle($this->title);
    }

    public function setTitle(BookReader $bookReader)
    {
        $this->title = $bookReader->getTitle();
    }
}

