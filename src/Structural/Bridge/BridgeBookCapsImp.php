<?php

namespace Src\Structural\Bridge;

use Src\Structural\Bridge\BridgeBookImp;

class BridgeBookCapsImp extends BridgeBookImp
{
    public function showAuthor($author_in)
    {
        return strtoupper($author_in);
    }

    public function showTitle($title_in)
    {
        return strtoupper($title_in);
    }
}

