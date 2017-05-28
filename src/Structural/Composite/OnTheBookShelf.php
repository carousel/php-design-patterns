<?php

namespace Src\Structural\Composite;

abstract class OnTheBookShelf
{
    abstract public function getBookInfo($previousBook);

    abstract public function getBookCount();

    abstract public function setBookCount($new_count);

    abstract public function addBook($oneBook);

    abstract public function removeBook($oneBook);
}

