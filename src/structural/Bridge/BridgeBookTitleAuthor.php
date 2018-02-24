<?php 

namespace Structural\Bridge;

class BridgeBookTitleAuthor extends BridgeBook
{
    public function showAuthorTitle()
    {
        return $this->showAuthor() . "'s " . $this->showTitle();
    }
}

