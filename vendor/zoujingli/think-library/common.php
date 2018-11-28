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

if (!function_exists('p')) {
    /**
     * 打印输出数据到文件
     * @param mixed $data 输出的数据
     * @param boolean $force 强制替换
     * @param string|null $file 文件名称
     */
    function p($data, $force = false, $file = null)
    {
        is_null($file) && $file = env('runtime_path') . date('Ymd') . '.txt';
        $str = (is_string($data) ? $data : (is_array($data) || is_object($data)) ? print_r($data, true) : var_export($data, true)) . PHP_EOL;
        $force ? file_put_contents($file, $str) : file_put_contents($file, $str, FILE_APPEND);
    }
}

if (!function_exists('scheme_db')) {
    /**
     * 获取兼容Db方法
     * @param \think\db\Query|string $dbQuery
     * @param string $method
     * @return \think\db\Query
     * @throws \think\Exception
     */
    function scheme_db($dbQuery, $method = 'name')
    {
        if (is_object($dbQuery)) return $dbQuery;
        foreach (['\think\facade\Db', '\think\Db'] as $class) {
            if (class_exists(trim($class, '\\'))) {
                return $class::$method($dbQuery);
            }
        }
        throw new \think\Exception("Not Found Db Class {$dbQuery}");
    }
}

if (!function_exists('format_datetime')) {
    /**
     * 日期格式标准输出
     * @param string $datetime 输入日期
     * @param string $format 输出格式
     * @return false|string
     */
    function format_datetime($datetime, $format = 'Y年m月d日 H:i:s')
    {
        return date($format, strtotime($datetime));
    }
}

if (!function_exists('sysconf')) {
    /**
     * 设备或配置系统参数
     * @param string $name 参数名称
     * @param boolean $value 无值为获取
     * @return string|boolean
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    function sysconf($name, $value = null)
    {
        static $data = [];
        if ($value !== null) {
            list($row, $data) = [['name' => $name, 'value' => $value], []];
            return \library\tools\Data::save('SystemConfig', $row, 'name');
        }
        if (empty($data)) $data = scheme_db('SystemConfig')->column('name,value');
        return isset($data[$name]) ? $data[$name] : '';
    }
}

if (!function_exists('http_get')) {
    /**
     * 以get模拟网络请求
     * @param string $url HTTP请求URL地址
     * @param array $query GET请求参数
     * @param array $options CURL参数
     * @return boolean|string
     */
    function http_get($url, $query = [], $options = [])
    {
        return \library\tools\Http::get($url, $query, $options);
    }
}

if (!function_exists('http_post')) {
    /**
     * 以get模拟网络请求
     * @param string $url HTTP请求URL地址
     * @param array $data POST请求数据
     * @param array $options CURL参数
     * @return boolean|string
     */
    function http_post($url, $data, $options = [])
    {
        return \library\tools\Http::post($url, $data, $options);
    }
}

if (!function_exists('data_save')) {
    /**
     * 数据增量保存
     * @param \think\db\Query|string $dbQuery 数据查询对象
     * @param array $data 需要保存或更新的数据
     * @param string $key 条件主键限制
     * @param array $where 其它的where条件
     * @return boolean
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    function data_save($dbQuery, $data, $key = 'id', $where = [])
    {
        return \library\tools\Data::save($dbQuery, $data, $key, $where);
    }
}


if (!function_exists('data_batch_save')) {
    /**
     * 批量更新数据
     * @param \think\db\Query|string $dbQuery 数据查询对象
     * @param array $data 需要更新的数据(二维数组)
     * @param string $key 条件主键限制
     * @param array $where 其它的where条件
     * @return boolean
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    function data_batch_save($dbQuery, $data, $key = 'id', $where = [])
    {
        return \library\tools\Data::batchSave($dbQuery, $data, $key, $where);
    }
}

if (!function_exists('encode')) {
    /**
     * UTF8 字符串加密
     * @param string $string
     * @return string
     */
    function encode($string)
    {
        return \library\tools\Crypt::encode($string);
    }
}

if (!function_exists('decode')) {
    /**
     * UTF8 字符串解密
     * @param string $string
     * @return string
     */
    function decode($string)
    {
        return \library\tools\Crypt::decode($string);
    }
}

if (!function_exists('emoji_encode')) {
    /**
     * Emoji 表情编码
     * @param string $string
     * @return string
     */
    function emoji_encode($string)
    {
        return \library\tools\Crypt::emojiEncode($string);
    }
}

if (!function_exists('emoji_decode')) {
    /**
     * Emoji 表情解析
     * @param string $string
     * @return string
     */
    function emoji_decode($string)
    {
        return \library\tools\Crypt::emojiDecode($string);
    }
}