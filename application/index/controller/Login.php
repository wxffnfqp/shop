<?php
namespace app\index\controller;
use think\Controller;
class Login extends Controller
{
    //登录
    function login(){
        return $this->fetch('login');
    }
    //注册
    function register(){
        return $this->fetch('register');
    }
    //会员须知
    function xuzhi(){
        return $this->fetch('xuzhi');
    }
    //找回密码，手机号验证
    function verification(){
        return $this->fetch('verification');
    }
    //下一步，密码重置
    function mima(){
        return $this->fetch('mima');
    }
    function out(){
        $this->success('退出成功','login/login');
    }
}
