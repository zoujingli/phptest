<?php

namespace app\index\controller;

use think\admin\Controller;

class Index extends Controller
{
    public function index()
    {
//        $list = NodeExtend::getMethods();
//        dump($list);
//        echo app()->request();
        //dump(app()->request);
        echo '\\';
        echo app()->request->controller();
        echo '\\';
        echo app()->request->action();
    }

}