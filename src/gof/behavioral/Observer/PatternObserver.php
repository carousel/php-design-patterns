<?php 

namespace Behavioral\Observer;

class PatternObserver extends AbstractObserver
{
    public function __construct()
    {
    }
    public function update(AbstractSubject $subject)
    {
        $subject->getFavorites();
    }
}

