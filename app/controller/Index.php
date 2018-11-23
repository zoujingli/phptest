<?php

namespace app\controller;

use library\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->_page('test');

    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
