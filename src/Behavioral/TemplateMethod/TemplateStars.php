<?php namespace Src\Behavioral\TemplateMethod;

class TemplateStars extends TemplateAbstract
{
    function processTitle($title)
    {
        return Str_replace(' ', '*', $title);
    }
    function processAuthor($author)
    {
        return $author;
    }
}


