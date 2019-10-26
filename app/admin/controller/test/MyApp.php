<?php


namespace app\admin\controller\test;


use think\admin\Controller;
use think\admin\extend\NodeExtend;

class MyApp extends Controller
{
    public function index()
    {
        echo NodeExtend::current();
    }

}