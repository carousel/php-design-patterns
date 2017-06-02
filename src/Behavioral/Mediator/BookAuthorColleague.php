<?php

namespace Src\Behavioral\Mediator;

class BookAuthorColleague extends BookColleague
{
    private $author;
    private $state;

    public function __construct($author_in, $mediator_in)
    {
        $this->author = $author_in;
        parent::__construct($mediator_in);
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author_in)
    {
        $this->author = $author_in;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state_in)
    {
        $this->state = $state_in;
    }

    public function setAuthorUpperCase()
    {
        $this->setAuthor(strtoupper($this->getAuthor()));
        $this->setState('upper');
        $this->getMediator()->change($this);
    }

    public function setAuthorLowerCase()
    {
        $this->setAuthor(strtolower($this->getAuthor()));
        $this->setState('lower');
        $this->getMediator()->change($this);
    }
}

class BookTitleColleague extends BookColleague
{
    private $title;
    private $state;

    public function __construct($title_in, $mediator_in)
    {
        $this->title = $title_in;
        parent::__construct($mediator_in);
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title_in)
    {
        $this->title = $title_in;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state_in)
    {
        $this->state = $state_in;
    }

    public function setTitleUpperCase()
    {
        $this->setTitle(strtoupper($this->getTitle()));
        $this->setState('upper');
        $this->getMediator()->change($this);
    }

    public function setTitleLowerCase()
    {
        $this->setTitle(strtolower($this->getTitle()));
        $this->setState('lower');
        $this->getMediator()->change($this);
    }
}

writeln('BEGIN TESTING MEDIATOR PATTERN');
writeln('');

$mediator = new BookMediator('Gamma, Helm, Johnson, and Vlissides', 'Design Patterns');

$author = $mediator->getAuthor();
$title = $mediator->getTitle();

writeln('Original Author and Title: ');
writeln('author: ' . $author->getAuthor());
writeln('title: ' . $title->getTitle());
writeln('');

$author->setAuthorLowerCase();

writeln('After Author set to Lower Case: ');
writeln('author: ' . $author->getAuthor());
writeln('title: ' . $title->getTitle());
writeln('');

$title->setTitleUpperCase();

writeln('After Title set to Upper Case: ');
writeln('author: ' . $author->getAuthor());
writeln('title: ' . $title->getTitle());
writeln('');

writeln('END TESTING MEDIATOR PATTERN');

function writeln($line_in)
{
    echo $line_in . '<br/>';
}
