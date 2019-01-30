<?php

namespace Creational\Singleton;

class BookBorrower
{
    private $borrowedBook;
    private $haveBook = false;

    public function borrowBook()
    {
        $this->borrowedBook = BookSingleton::borrowBook();
        if ($this->borrowedBook == null) {
            $this->haveBook = false;
        } else {
            $this->haveBook = true;
        }
    }

    public function returnBook()
    {
        if($this->borrowedBook){
            $this->borrowedBook->returnBook();
        }else{
            return null;
        }
    }
}
