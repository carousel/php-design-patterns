<?php

class Request 
{
    public $input = "The Book";
    public function get()
    {
        return $this->input;
    }
}

