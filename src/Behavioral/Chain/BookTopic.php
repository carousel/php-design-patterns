<?php namespace Src\Behavioral\Chain;

class BookTopic extends AbstractBookTopic
{
    private $topic;
    private $title;

    public function __construct($topic_in)
    {
        $this->topic = $topic_in;
        $this->title = null;
    }

    public function getTopic()
    {
        return $this->topic;
    }

    //this is the end of the chain - returns title or says there is none
    public function getTitle()
    {
        if (null != $this->title) {
            return $this->title;
        } else {
            return 'there is no title available';
        }
    }

    public function setTitle($title_in)
    {
        $this->title = $title_in;
    }
}
