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

use app\admin\service\NodeService;
use think\admin\Controller;
use think\admin\extend\CaptchaExtend;
use think\facade\Db;

/**
 * 用户登录管理
 * Class Login
 * @package app\admin\controller
 */
class Login extends Controller
{
    /**
     * 后台登录入口
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    public function index()
    {
        if ($this->request->isGet()) {
            if (NodeService::islogin()) {
                $this->redirect('@admin');
            } else {
                $this->title = '系统登录';
                $this->domain = $this->request->host(true);
                if (!($this->loginskey = session('loginskey'))) session('loginskey', $this->loginskey = uniqid() . rand(1000, 9999));
                $this->devmode = in_array($this->domain, ['127.0.0.1', 'localhost']) || is_numeric(stripos($this->domain, 'thinkadmin.top'));
                $this->captcha = CaptchaExtend::instance();
                $this->fetch();
            }
        } elseif ($this->request->isPost()) {
            $data = ['username' => input('username'), 'password' => input('password')];
            if (empty($data['username'])) $this->error('登录账号不能为空!');
            if (empty($data['password'])) $this->error('登录密码不能为空!');
            if (!CaptchaExtend::check(input('verify'), input('uniqid'))) {
                $this->error('图形验证码验证失败，请重新输入!');
            }
            // 用户信息验证
            $map = ['username' => $data['username'], 'is_deleted' => '0'];
            $user = Db::name('SystemUser')->where($map)->order('id desc')->find();
            if (empty($user)) {
                $this->error('登录账号或密码错误，请重新输入!');
            }
            if (md5($user['password'] . session('loginskey')) <> $data['password']) {
                $this->error('登录账号或密码错误，请重新输入!');
            }
            if (empty($user['status'])) {
                $this->error('账号已经被禁用，请联系管理员!');
            }
            Db::name('SystemUser')->where(['id' => $user['id']])->update([
                'login_at'  => Db::raw('now()'),
                'login_ip'  => $this->request->ip(),
                'login_num' => Db::raw('login_num+1'),
            ]);
            session('admin_user', $user);
            // NodeService::applyUserAuth(true);
            // sysoplog('系统管理', '用户登录系统成功');
            $this->success('登录成功', url('@admin'));
        }
    }

    /**
     * 退出登录
     */
    public function out()
    {
        \think\facade\Session::clear();
        \think\facade\Session::destroy();
        $this->success('退出登录成功!', url('@admin/login'));
    }

}