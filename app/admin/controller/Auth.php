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

namespace app\admin\controller;

use think\admin\Controller;
use think\Db;

/**
 * 系统权限管理
 * Class Auth
 * @package app\admin\controller
 */
class Auth extends Controller
{
    /**
     * 绑定数据表
     * @var string
     */
    public $table = 'SystemAuth';

    /**
     * 系统权限管理
     * @auth true
     * @menu true
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    public function index()
    {
        $this->title = '系统权限管理';
        $query = $this->_query($this->table)->dateBetween('create_at');
        $query->like('title,desc')->equal('status')->order('sort desc,id desc')->page();
    }

    /**
     * 添加系统权限
     * @auth true
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    public function add()
    {
        $this->_applyFormToken()();
        $this->_form($this->table, 'form');
    }

    /**
     * 编辑系统权限
     * @auth true
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    public function edit()
    {
        $this->_applyFormToken()();
        $this->_form($this->table, 'form');
    }

    /**
     * 修改系统权限状态
     * @auth true
     * @throws \think\db\exception\DbException
     */
    public function state()
    {
        $this->_applyFormToken()();
        $this->_save($this->table, ['status' => input('status')]);
    }

    /**
     * 删除系统权限
     * @auth true
     * @throws \think\db\exception\DbException
     */
    public function remove()
    {
        $this->_applyFormToken()();
        $this->_delete($this->table);
    }

    /**
     * 删除结果处理
     * @param boolean $result
     * @throws \think\db\exception\DbException
     */
    protected function _remove_delete_result($result)
    {
        if ($result) {
            $map = ['auth' => $this->request->post('id')];
            Db::name('SystemAuthNode')->where($map)->delete();
            $this->success("权限删除成功！", '');
        } else {
            $this->error("权限删除失败，请稍候再试！");
        }
    }

}