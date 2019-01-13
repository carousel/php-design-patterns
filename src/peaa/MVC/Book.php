<?php
require 'Model.php';

class Book extends Model 
{
    public function byTitle($title)
    {
        return $this->findByTitle($title);
    }
        
}

