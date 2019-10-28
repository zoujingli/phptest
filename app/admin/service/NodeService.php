<?php

// +----------------------------------------------------------------------
// | Library for ThinkAdmin
// +----------------------------------------------------------------------
// | 版权所有 2014~2019 广州楚才信息科技有限公司 [ http://www.cuci.cc ]
// +----------------------------------------------------------------------
// | 官方网站: http://demo.thinkadmin.top
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | gitee 仓库地址 ：https://gitee.com/zoujingli/ThinkLibrary
// | github 仓库地址 ：https://github.com/zoujingli/ThinkLibrary
// +----------------------------------------------------------------------

namespace app\admin\service;

/**
 * 应用节点扫描器扩展
 * Class NodeExtend
 * @package app\admin\extend
 */
class NodeService
{

    /**
     * 检查指定节点授权
     * --- 需要读取缓存或扫描所有节点
     * @param string $node
     * @return boolean
     * @throws \ReflectionException
     */
    public static function checkAuth($node = '')
    {
        if (app()->session->get('user') === 'admin') {
            return true;
        }
        if (empty($node)) {
            $node = self::getCurrent();
        }
        $attrs = explode('/', $node);
        if (count($attrs) === 1) {
            $node = self::getCurrent('controller') . "/{$node}";
        } else {
            $attrs[1] = self::classTolower($attrs[1]);
            $node = join('/', $attrs);
        }
        $nodes = self::getMethods();
        if (empty($nodes[$node]['isauth'])) return true;
        return in_array($node, app()->session->get('user.nodes', []));
    }

    /**
     * 控制器方法扫描处理
     * @param boolean $force
     * @return array
     * @throws \ReflectionException
     */
    public static function getMethods($force = false)
    {
        if (empty($force)) {
            $data = [];
            if (count($data) > 0) return $data;
            $data = app()->cache->get('system_auth_node', []);
            if (count($data) > 0) return $data;
        } else {
            static $data = [];
        }
        $ignores = get_class_methods('\think\admin\Controller');
        foreach (self::scanDirectory(app()->getAppPath()) as $file) {
            if (stripos($file, '/controller/') === false) continue;
            if (preg_match('|namespace\s+(.*?);.*?\s+class\s+(.*?)\s+|xi', strtr(file_get_contents($file), "\n", ' '), $mchs)) {
                $refection = new \ReflectionClass("{$mchs[1]}\\{$mchs[2]}");
                foreach ($refection->getMethods(\ReflectionMethod::IS_PUBLIC) as $method) {
                    if (in_array($method->getName(), $ignores)) continue;
                    list($prefix, $suffix) = explode('\\controller\\', $refection->getName());
                    $space = strtr("{$prefix}/" . self::classTolower($suffix) . "/{$method->getName()}", '\\', '/');
                    $comment = strtr($method->getDocComment(), "\n", ' ');
                    $data[substr($space, stripos($space, '/') + 1)][$method->getName()] = [
                        'title'  => preg_replace('/^\/\*\s*\*\s*\*\s*(.*?)\s*\*.*?$/', '$1', $comment) ?: $method->getName(),
                        'isauth' => intval(preg_match('/@auth\s*true/i', $comment)),
                        'ismenu' => intval(preg_match('/@menu\s*true/i', $comment)),
                    ];
                }

            }
        }
        app()->cache->set('system_auth_node', $data);
        return $data;
    }

    /**
     * 获取当前节点名称
     * @param string $type 获取类型
     * @return string
     */
    public static function getCurrent($type = '')
    {
        $app = app();
        $classname = self::classTolower($app->request->controller());
        if ($type === 'controller') {
            $namespace = "{$app->getNamespace()}\\{$classname}";
        } else {
            $namespace = "{$app->getNamespace()}\\{$classname}\\{$app->request->action()}";
        }
        return strtr(substr($namespace, stripos($namespace, '\\') + 1), '\\', '/');
    }

    /**
     * 驼峰转下划线规则
     * @param string $name
     * @return string
     */
    public static function classTolower($name)
    {
        $dots = [];
        foreach (explode('.', $name) as $dot) {
            $dots[] = trim(preg_replace("/[A-Z]/", "_\\0", $dot), "_");
        }
        return strtolower(join('.', $dots));
    }

    /**
     * 获取所有PHP文件列表
     * @param string $path 扫描目录
     * @param array $data 额外数据
     * @param string $ext 有文件后缀
     * @return array
     */
    private static function scanDirectory($path, $data = [], $ext = 'php')
    {
        foreach (glob("{$path}*") as $item) {
            if (is_dir($item)) {
                $data = array_merge($data, self::scanDirectory("{$item}/"));
            } elseif (is_file($item) && pathinfo($item, PATHINFO_EXTENSION) === $ext) {
                $data[] = strtr($item, '\\', '/');
            }
        }
        return $data;
    }

}