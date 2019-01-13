<?php

class View 
{
    public function template($data)
    {
        if(is_string($data)){
            echo "<h2>" . $data . "</h2>";
        }else{
            foreach($data as $key => $val){
                echo "<p>" . $val . "</p>" . PHP_EOL ;
            }
        }
    }
        
    public function render($data)
    {
        return $this->template($data);
    }
        
}

