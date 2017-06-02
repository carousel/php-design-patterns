<?php

namespace Src\Behavioral\TemplateMethod;

abstract class TemplateAbstract
{
    /*
     *the template method
     * sets up a general algorithm for the whole class
     */
    public final function showBookTitleInfo($book_in)
    {
        $title = $book_in->getTitle();
        $author = $book_in->getAuthor();
        $processedTitle = $this->processTitle($title);
        $processedAuthor = $this->processAuthor($author);
        if (NULL == $processedAuthor) {
            $processed_info = $processedTitle;
        } else {
            $processed_info = $processedTitle . ' by ' . $processedAuthor;
        }
        return $processed_info;
    }

    /*
     *the primitive operation
     * this function must be overridded
     */
    abstract function processTitle($title);

    /*
     *the hook operation
     * this function may be overridden,
     * but does nothing if it is not
     */
    function processAuthor($author)
    {
        return NULL;
    }
}
