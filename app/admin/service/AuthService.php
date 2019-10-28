<?php

// +----------------------------------------------------------------------
// | ThinkAdmin
// +----------------------------------------------------------------------
// | 版权所有 2014~2019 广州楚才信息科技有限公司 [ http://www.cuci.cc ]
// +----------------------------------------------------------------------
// | 官方网站: http://demo.thinkadmin.top
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | gitee 代码仓库：https://gitee.com/zoujingli/ThinkAdmin
// | github 代码仓库：https://github.com/zoujingli/ThinkAdmin
// +----------------------------------------------------------------------

namespace app\admin\service;

use think\admin\extend\DataExtend;
use think\facade\Db;

/**
 * 系统授权服务
 * Class MenuService
 * @package app\admin\service
 */
class AuthService
{
    /**
     * 判断是否已经登录
     * @return boolean
     */
    public static function isLogin()
    {
        return app()->session->get('user.id') ? true : false;
    }

    /**
     * 初始化用户权限
     * @param boolean $force 是否重置系统权限
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    public static function applyUserAuth($force = false)
    {
        $app = app();
        if ($force) $app->cache->delete('system_auth_node');
        if (($uid = $app->session->get('user.id'))) {
            $user = $app->db->name('SystemUser')->where(['id' => $uid])->find();
            if (($aids = $user['authorize'])) {
                $where = [['status', 'eq', '1'], ['id', 'in', explode(',', $aids)]];
                $subsql = $app->db->name('SystemAuth')->field('id')->where($where)->buildSql();
                $user['nodes'] = array_unique($app->db->name('SystemAuthNode')->whereRaw("auth in {$subsql}")->column('node'));
                $app->session->set('user', $user);
            } else {
                $user['nodes'] = [];
                $app->session->set('user', $user);
            }
        }
    }

    /**
     * 获取可选菜单节点
     * @return array
     * @throws \ReflectionException
     */
    public static function getMenuList()
    {
        static $nodes = [];
        if (count($nodes) > 0) return $nodes;
        foreach (NodeService::getMethods() as $node => $method) if ($method['ismenu']) {
            $nodes[] = ['node' => $node, 'title' => $method['title']];
        }
        return $nodes;
    }

    /**
     * 获取系统菜单树数据
     * @return array
     * @throws \ReflectionException
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    public static function getMenuTree()
    {
        $list = Db::name('SystemMenu')->where(['status' => '1'])->order('sort desc,id asc')->select()->toArray();
        return self::buildMenuData(DataExtend::arr2tree($list), NodeService::getMethods());
    }

    /**
     * 后台主菜单权限过滤
     * @param array $menus 当前菜单列表
     * @param array $nodes 系统权限节点
     * @return array
     * @throws \ReflectionException
     */
    private static function buildMenuData($menus, $nodes)
    {
        foreach ($menus as $key => &$menu) {
            if (empty($menu['ismenu'])) {
                continue;
            }
            if (!empty($menu['sub'])) {
                $menu['sub'] = self::buildMenuData($menu['sub'], $nodes);
            }
            if (!empty($menu['sub'])) {
                $menu['url'] = '#';
            } elseif (preg_match('/^https?\:/i', $menu['url'])) {
                continue;
            } elseif ($menu['url'] === '#') {
                unset($menus[$key]);
            } else {
                $node = join('/', array_slice(explode('/', preg_replace('/[\W]/', '/', $menu['url'])), 0, 3));
                $menu['url'] = url($menu['url']) . (empty($menu['params']) ? '' : "?{$menu['params']}");
                if (!NodeService::checkAuth($node)) {
                    unset($menus[$key]);
                }
            }
        }
        return $menus;
    }
}