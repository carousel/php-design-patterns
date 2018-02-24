<?php

namespace Structural\Bridge;

class BridgeBookStarsImp extends BridgeBookImp
{
    public function showAuthor($author_in)
    {
        return Str_replace(" ", "*", $author_in);
    }

    public function showTitle($title_in)
    {
        return Str_replace(" ", "*", $title_in);
    }
}
