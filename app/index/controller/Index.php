<?php


namespace app\index\controller;


use think\admin\Controller;

class Index extends Controller
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