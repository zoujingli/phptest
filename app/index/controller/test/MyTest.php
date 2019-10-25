<?php


namespace app\index\controller\test;


class MyTest
{
    /**
     * 这是一个子控制器
     * @auth true
     * @menu true
     */
    public function index()
    {
        echo app()->getNamespace();
        echo '\\';
        echo app()->request->controller();
        echo '\\';
        echo app()->request->action();
    }

    /**
     * 这是一个子控制器
     * @auth true
     */
    public function text()
    {
        echo app()->getNamespace();
        echo '\\';
        echo app()->request->controller();
        echo '\\';
        echo app()->request->action();
    }

}