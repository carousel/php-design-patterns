<?php namespace Src\Behavioral\Observer;

class PatternSubject extends AbstractSubject
{
    private $favorites = null;
    private $observers = array();
    public function __construct()
    {
    }
    public function attach(AbstractObserver $observer_in)
    {
        //could also use array_push($this->observers, $observer_in);
        $this->observers[] = $observer_in;
    }
    public function detach(AbstractObserver $observer_in)
    {
        foreach ($this->observers as $okey => $oval) {
            if ($oval == $observer_in) {
                unset($this->observers[$okey]);
            }
        }
    }

    public function updateFavorites($newFavorites)
    {
        $this->favorites = $newFavorites;
        $this->notify();
    }

    public function notify()
    {
        foreach ($this->observers as $obs) {
            $obs->update($this);
        }
    }

    public function getFavorites()
    {
        return $this->favorites;
    }
}
