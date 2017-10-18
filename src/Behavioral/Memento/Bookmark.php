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


//writeln('(at beginning) bookReader title: ' . $bookReader->getTitle());
//writeln('(at beginning) bookReader page: ' . $bookReader->getPage());

//$bookReader->setPage("104");
//$bookMark->setPage($bookReader);
//writeln('(one page later) bookReader page: ' . $bookReader->getPage());

//$bookReader->setPage('2005');  //oops! a typo
//writeln('(after typo) bookReader page: ' . $bookReader->getPage());

//$bookMark->getPage($bookReader);
//writeln('(back to one page later) bookReader page: ' . $bookReader->getPage());
//writeln('');

//writeln('END TESTING MEMENTO PATTERN');

//function writeln($line_in)
//{
    //echo $line_in . "<br/>";
//}

//?> 
