<?php

namespace Creational\Singleton;

class BookSingleton
{
    private static $book = null;
    private static $isLoanedOut = false;

    public static function borrowBook()
    {
        if (false == self::$isLoanedOut) {
            if (null == self::$book) {
                self::$book = new BookSingleton();
            }
            self::$isLoanedOut = true;
            return self::$book;
        } else {
            return null;
        }
    }

    public function returnBook()
    {
        self::$isLoanedOut = false;
    }

    public function isLoanedOut()
    {
        return self::isLoanedOut;
    }
}

