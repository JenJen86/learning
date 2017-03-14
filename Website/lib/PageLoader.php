<?php

class PageLoader
{
    const PAGES_DIRECTOR = "pages";

    private $page;

    public function __construct(Page $page)
    {
        $this->page = $page;
    }

    public function render()
    {
        $name = $this->page->getName();
        include sprintf("%s/%s.php", PageLoader::PAGES_DIRECTOR, $name);
    }
}
