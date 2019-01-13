<?php 

namespace Structural\Bridge;

class BridgeBookTitleAuthor extends BridgeBook
{
    /**
     * @return string
     */
    public function showAuthorTitle()
    {
        return $this->showAuthor() . "'s " . $this->showTitle();
    }
}

