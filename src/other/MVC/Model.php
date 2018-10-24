<?php
class Model 
{
    public $titles = ['The Book','Jazz history','Zen','System theory'];
    public function findByTitle($title)
    {
        if(in_array($title,$this->titles)){
            return $this->titles[$title];
        }else{
            throw new Exception("Sorry, we can't find a book");
        }
    }
}

