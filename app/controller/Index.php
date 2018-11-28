<?php

namespace app\controller;

use library\Controller;

class Index extends Controller
{
    public function index()
    {
        url();
        dump($this->_page('SystemUser', false, false));
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
