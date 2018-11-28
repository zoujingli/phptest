<?php

// +----------------------------------------------------------------------
// | Library for ThinkAdmin
// +----------------------------------------------------------------------
// | 版权所有 2014~2018 广州楚才信息科技有限公司 [ http://www.cuci.cc ]
// +----------------------------------------------------------------------
// | 官方网站: http://library.thinkadmin.top
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | github 仓库地址 ：https://github.com/zoujingli/ThinkLibrary
// +----------------------------------------------------------------------

namespace library\tools;

use think\db\Query;

/**
 * Class Data
 * @package library\tools
 */
class Data
{
    /**
     * 数据增量保存
     * @param Query|string $dbQuery 数据查询对象
     * @param array $data 需要保存或更新的数据
     * @param string $key 条件主键限制
     * @param array $where 其它的where条件
     * @return boolean
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public static function save($dbQuery, $data, $key = 'id', $where = [])
    {
        list($table, $value) = [scheme_db($dbQuery)->getTable(), isset($data[$key]) ? $data[$key] : null];
        $map = isset($where[$key]) ? [] : (is_string($value) ? [[$key, 'in', explode(',', $value)]] : [$key => $value]);
        if (scheme_db($table, 'table')->where($where)->where($map)->count() > 0) {
            return scheme_db($table, 'table')->strict(false)->where($where)->where($map)->update($data) !== false;
        }
        return scheme_db($table, 'table')->strict(false)->insert($data) !== false;
    }

    /**
     * 批量更新数据
     * @param Query|string $dbQuery 数据查询对象
     * @param array $data 需要更新的数据(二维数组)
     * @param string $key 条件主键限制
     * @param array $where 其它的where条件
     * @return boolean
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public static function batchSave($dbQuery, $data, $key = 'id', $where = [])
    {
        list($case, $_data) = [[], []];
        foreach ($data as $row) foreach ($row as $k => $v) $case[$k][] = "WHEN '{$row[$key]}' THEN '{$v}'";
        if (isset($case[$key])) unset($case[$key]);
        $db = scheme_db($dbQuery);
        foreach ($case as $k => $v) $_data[$k] = $db->raw("CASE `{$key}` " . join(' ', $v) . ' END');
        return $db->whereIn($key, array_unique(array_column($data, $key)))->where($where)->update($_data) !== false;
    }

    /**
     * 一维数据数组生成数据树
     * @param array $list 数据列表
     * @param string $id 父ID Key
     * @param string $pid ID Key
     * @param string $son 定义子数据Key
     * @return array
     */
    public static function arr2tree($list, $id = 'id', $pid = 'pid', $son = 'sub')
    {
        list($tree, $map) = [[], []];
        foreach ($list as $item) $map[$item[$id]] = $item;
        foreach ($list as $item) if (isset($item[$pid]) && isset($map[$item[$pid]])) {
            $map[$item[$pid]][$son][] = &$map[$item[$id]];
        } else $tree[] = &$map[$item[$id]];
        unset($map);
        return $tree;
    }

    /**
     * 一维数据数组生成数据树
     * @param array $list 数据列表
     * @param string $id ID Key
     * @param string $pid 父ID Key
     * @param string $path
     * @param string $ppath
     * @return array
     */
    public static function arr2table(array $list, $id = 'id', $pid = 'pid', $path = 'path', $ppath = '')
    {
        $tree = [];
        foreach (self::arr2tree($list, $id, $pid) as $attr) {
            $attr[$path] = "{$ppath}-{$attr[$id]}";
            $attr['sub'] = isset($attr['sub']) ? $attr['sub'] : [];
            $attr['spt'] = substr_count($ppath, '-');
            $attr['spl'] = str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;├&nbsp;", $attr['spt']);
            $sub = $attr['sub'];
            unset($attr['sub']);
            $tree[] = $attr;
            if (!empty($sub)) {
                $tree = array_merge($tree, self::arr2table($sub, $id, $pid, $path, $attr[$path]));
            }
        }
        return $tree;
    }

    /**
     * 获取数据树子ID
     * @param array $list 数据列表
     * @param int $id 起始ID
     * @param string $key 子Key
     * @param string $pkey 父Key
     * @return array
     */
    public static function getArrSubIds($list, $id = 0, $key = 'id', $pkey = 'pid')
    {
        $ids = [intval($id)];
        foreach ($list as $vo) if (intval($vo[$pkey]) > 0 && intval($vo[$pkey]) === intval($id)) {
            $ids = array_merge($ids, self::getArrSubIds($list, intval($vo[$key]), $key, $pkey));
        }
        return $ids;
    }
}