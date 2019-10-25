<?php


namespace app\index\controller;


class MyApp
{
    public function index()
    {
        echo app()->getNamespace();
        echo '\\';
        echo app()->request->controller();
        echo '\\';
        echo app()->request->action();
    }

}