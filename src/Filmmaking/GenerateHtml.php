<?php

namespace Filmmaking;

class GenerateHtml {
    protected $layout;
    protected $page;
    protected $data = array();

    public function __construct($layout)
    {
        $this->layout = $layout;
    }

    public function generatePage($page, $data)
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }

        $this->page = $page;
        require $this->layout;


    }

    public function getContent()
    {
        require $this->page;
    }
}
