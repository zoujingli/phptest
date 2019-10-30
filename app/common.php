<?php


use app\admin\service\AuthService;

function auth($node)
{
    return AuthService::checkAuth($node);
}


