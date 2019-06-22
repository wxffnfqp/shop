<?php
namespace app\index\controller;
use think\Controller;
use think\captcha\Captcha;
use Request;
use think\facade\Session;
class Login extends Controller
{
    //登录
    function login(){
        $arr=db('user')->find();
        $this->assign('arr',$arr);
        return $this->fetch('login');
    }
    //登录验证，跳转
    function loginAction(){
        $code=Request::post('code');
        $user=Request::post('user');
        $pwd=Request::post('pwd');
        $res=db('user')->find();
        if( !captcha_check($code ))
        {
            $arr=['code'=>'1','status'=>'error','message'=>'验证码错误'];
        }elseif ($user!=$res['user_name'] || $pwd!=$res['password']){
            $arr=['code'=>'2','status'=>'error','message'=>'用户名或密码错误'];
        }else{
            Session::set('name',$res['user_name']);
            Session::set('id',$res['id']);
            $arr=['code'=>'0','status'=>'success','message'=>''];
        }
        $json=json_encode($arr);
        echo $json;
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
        Session::delete('name');
        $this->register('login/login');
    }
}
