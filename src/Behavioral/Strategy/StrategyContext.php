<?php

namespace Src\Behavioral\Strategy;

class StrategyContext
{
    private $strategy = null;

    //bookList is not instantiated at construct time
    public function __construct($strategy_ind_id)
    {
        switch ($strategy_ind_id) {
            case "C":
                $this->strategy = new StrategyCaps();
                break;
            case "E":
                $this->strategy = new StrategyExclaim();
                break;
        }
    }

    public function showBookTitle($book)
    {
        return $this->strategy->showTitle($book);
    }
}



