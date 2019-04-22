<?php

namespace app\controller;

class Index
{
    public function index()
    {
        return view();
        return app()->version();
    }

    public function hello($name = 'ThinkPHP6')
    {

        return 'hello,' . $name;
    }
}
