<?php 

namespace Behavioral\Chain;

class BookSubSubTopic extends AbstractBookTopic
{
    private $topic;
    private $parentTopic;
    private $title;

    public function __construct($topic_in, BookSubTopic $parentTopic_in)
    {
        $this->topic = $topic_in;
        $this->parentTopic = $parentTopic_in;
        $this->title = null;
    }

    public function getTopic()
    {
        return $this->topic;
    }

    public function getParentTopic()
    {
        return $this->parentTopic;
    }

    public function getTitle()
    {
        if (null != $this->title) {
            return $this->title;
        } else {
            return $this->parentTopic->getTitle();
        }
    }

    public function setTitle($title_in)
    {
        $this->title = $title_in;
    }
}

