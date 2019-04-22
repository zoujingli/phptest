<?php

namespace app\controller;

class Index
{
    public function index()
    {
        return view();
    }

    public function hello($name = 'ThinkPHP6')
    {

        return 'hello,' . $name;
    }
}
