<?php namespace Src\Creational\Builder;

class HTMLPage
{
    private $page = null;
    private $page_title = null;
    private $page_heading = null;
    private $page_text = null;

    public function __construct()
    {
    }

    public function showPage()
    {
        return $this->page;
    }

    public function setTitle($title_in)
    {
        $this->page_title = $title_in;
    }

    public function setHeading($heading_in)
    {
        $this->page_heading = $heading_in;
    }

    public function setText($text_in)
    {
        $this->page_text .= $text_in;
    }

    public function formatPage()
    {
        $this->page = "<html>\n";
        $this->page .= "<head>\n\t<title>\n\t\t" . $this->page_title . "\n\t</title>\n</head>\n";
        $this->page .= "<body>\n";
        $this->page .= "\t<h1>\n\t\t" . $this->page_heading . "\n\t</h1>\n";
        $this->page .= "\t\t" . $this->page_text;
        $this->page .= "\n\t</body>\n";
        $this->page .= '</html>';
    }
}
