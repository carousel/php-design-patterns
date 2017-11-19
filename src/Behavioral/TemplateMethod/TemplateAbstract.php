<?php namespace Src\Behavioral\TemplateMethod;

abstract class TemplateAbstract
{
    /*
     *the template method
     * sets up a general algorithm for the whole class
     */
    final public function showBookTitleInfo($book_in)
    {
        $title = $book_in->getTitle();
        $author = $book_in->getAuthor();
        $processedTitle = $this->processTitle($title);
        $processedAuthor = $this->processAuthor($author);
        if (null == $processedAuthor) {
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
    abstract public function processTitle($title);
}
