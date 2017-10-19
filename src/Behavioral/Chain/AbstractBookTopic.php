<?php namespace Src\Behavioral\Chain;

abstract class AbstractBookTopic
{
    abstract public function getTopic();

    abstract public function getTitle();

    abstract public function setTitle($title_in);
}

