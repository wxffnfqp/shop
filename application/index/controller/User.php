<?php
namespace app\index\controller;
use think\Controller;
class User extends Controller
{
    //会员中心
    function center(){
        return $this->fetch('center');
    }
    //积分管理
    function jfguanli(){
        return $this->fetch('jfguanli');
    }
    //可用待专用积分
    function jfzhuanyong(){
        return $this->fetch('jfzhuanyong');
    }
    //可用积分转账
    function jfzhuanzhang(){
        return $this->fetch('jfzhuanzhang');
    }
    //商品兑换券
    function spduihuan(){
        return $this->fetch('spduihuan');
    }
    //报单商品券
    function baodan(){
        return $this->fetch('baodan');
    }
    //申请联盟商家
    function sqlianmeng(){
        return $this->fetch('sqlianmeng');
    }
    //申请运营中心
    function sqyunying(){
        return $this->fetch('sqyunying');
    }
    //消费订单管理
    function order(){
        return $this->fetch('order');
    }
    //我的好友
    function friend(){
        return $this->fetch('friend');
    }
    //修改密码
    function xiugai(){
        return $this->fetch('xiugai');
    }
    //修改名字
    function xiugainame(){
        return $this->fetch('xiugainame');
    }
    //选择收货地址
    function choiceAddress(){
        return $this->fetch('choiceAddress');
    }
    //管理收货地址
    function address(){
        return $this->fetch('address');
    }
}
