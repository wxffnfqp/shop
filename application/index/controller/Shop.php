<?php
namespace app\index\controller;
use think\Controller;
class Shop extends Controller
{
    //购物车
    function shopcar(){
        return $this->fetch('shopcar');
    }
    //现金账户管理
    function account(){
        return $this->fetch('account');
    }
    //现金充值
    function recharge(){
        return $this->fetch('recharge');
    }
    //现金转账
    function zhuanzhang(){
        return $this->fetch('zhuanzhang');
    }
    //天天特惠立即购买
    function confirm(){
        return $this->fetch('confirm');
    }
    //提交订单
    function submitOrder(){
        return $this->fetch('submitOrder');
    }
}
