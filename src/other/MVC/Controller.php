<?php
require 'Request.php';
require 'Book.php';
require 'View.php';

class Controller 
{
    public function __construct(Request $request)
    {
        $this->request = new Request;
        $this->book = new Book;
        $view = new View;
    }
    
    public function getBookByTitle ()
    {
        $input = $this->request->get();
        $book = $this->book->byTitle($input);
        //return $this->view->render($book);
    }
}

$c = new Controller(new Request);
$c->getBookByTitle();

