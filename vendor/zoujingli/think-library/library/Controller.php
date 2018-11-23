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

namespace library;

use library\tools\Cors;
use think\exception\HttpResponseException;

/**
 * 标准控制器基类
 * --------------------------------
 * Class Controller
 * @package library
 * --------------------------------
 * @method logic\Query _query($dbQuery)
 * @method array _input($data, $rule = [], $message = [])
 * @method mixed _delete($dbQuery, $pkField = '', $where = [])
 * @method mixed _save($dbQuery, $data = [], $pkField = '', $where = [])
 * @method array _page($dbQuery, $isPage = true, $isDisplay = true, $total = false, $limit = 0)
 * @method mixed _form($dbQuery, $tplFile = '', $pkField = '', $where = [], $extendData = [])
 * --------------------------------
 * @author Anyon <zoujingli@qq.com>
 * @date 2018/11/10 11:31
 */
class Controller extends \stdClass
{

    /**
     * @var \think\Request
     */
    protected $request;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        Cors::optionsHandler();
        $this->request = request();
    }

    /**
     * 实例方法调用
     * @access public
     * @param string $method 函数名称
     * @param array $arguments 调用参数
     * @return mixed
     * @throws \think\Exception
     * @throws \ReflectionException
     */
    public function __call($method, $arguments = [])
    {
        $name = "library\\logic\\" . ucfirst(ltrim($method, '_'));
        if (class_exists($name)) {
            $reflect = new \ReflectionClass($name);
            return $reflect->newInstanceArgs($arguments)->init($this);
        }
        if (method_exists($this, $method)) {
            return call_user_func_array([$this, $method], $arguments);
        }
        throw new \think\Exception('method not exists:' . get_class($this) . '->' . $method);
    }

    /**
     * 数据回调处理机制
     * @access public
     * @param string $name 回调方法名称
     * @param mixed $one 回调引用参数1
     * @param mixed $two 回调引用参数2
     * @return boolean
     */
    public function _callback($name, &$one, &$two = [])
    {
        $methods = [$name, "_{$this->request->action()}{$name}"];
        foreach ($methods as $method) if (method_exists($this, $method)) {
            if (false === $this->$method($one, $two)) return false;
        }
        return true;
    }

    /**
     * 返回成功的操作
     * @access protected
     * @param mixed $info 消息内容
     * @param array $data 返回数据
     * @param integer $code 返回代码
     */
    protected function success($info, $data = [], $code = 1)
    {
        $result = ['code' => $code, 'info' => $info, 'data' => $data];
        throw new HttpResponseException(json($result, 200, Cors::getRequestHeader()));
    }

    /**
     * 返回失败的请求
     * @access protected
     * @param mixed $info 消息内容
     * @param array $data 返回数据
     * @param integer $code 返回代码
     */
    protected function error($info, $data = [], $code = 0)
    {
        $result = ['code' => $code, 'info' => $info, 'data' => $data];
        throw new HttpResponseException(json($result, 200, Cors::getRequestHeader()));
    }

    /**
     * URL重定向
     * @access protected
     * @param string $url 重定向跳转链接
     * @param array $params 重定向链接参数
     * @param integer $code 重定向跳转代码
     */
    protected function redirect($url, $params = [], $code = 301)
    {
        throw new HttpResponseException(redirect($url, $params, $code));
    }

    /**
     * 返回视图内容
     * @access protected
     * @param string $tpl 模板名称
     * @param array $vars 模板变量
     * @param array $config 引擎配置
     * @return mixed
     */
    protected function fetch($tpl = '', $vars = [], $config = [])
    {
        return app('view')->assign((array)$this)->fetch($tpl, $vars, $config);
    }

    /**
     * 模板变量赋值
     * @access protected
     * @param  mixed $name 要显示的模板变量
     * @param  mixed $value 变量的值
     */
    protected function assign($name, $value = '')
    {
        app('view')->assign($name, $value);
    }

}