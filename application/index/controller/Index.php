<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
    //列表
    function list(){
        return $this->fetch('list');
    }
    //联盟商家
    function lianmeng(){
        return $this->fetch('lianmeng');
    }
    //天天特惠
    function detail(){
        return $this->fetch('detail');
    }
    //分类
    function cation(){
        return $this->fetch('cation');
    }
    //商家分类
    function sjfenlei(){
        return $this->fetch('sjfenlei');
    }
    //商家详情
    function sjdetail(){
        return $this->fetch('sjdetail');
    }

}
