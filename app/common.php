<?php

use app\admin\service\NodeService;

function auth($node)
{
    return NodeService::checkAuth($node);
}


