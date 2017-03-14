<?php

class Page
{
    private $pagename;

    public function __construct($pagename)
    {
        $this->pagename = $pagename;
    }

    public function getName()
    {
        return $this->pagename;
    }
}
