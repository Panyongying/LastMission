<?php

namespace HMadmin\Controller;

use Think\Controller;


class IndexController extends CommonController 
{
    public function index()
    {	
        // $res = M('order')->getDbFields();
        // dump($res);exit;

    	$res = M('goods')->field('id')->select();

    	$num = count($res);

    	$res = M('admin')->field('id')->select();

    	$AdminNum = count($res);

    	$userNum = count(M('user')->field('id')->select());

        $orderNum = count(M('order')->field('id')->select());


        $allPrice = M('order')->field('sum(orderTotalPrice) as haha')->where('orderStatus = 2')->find()['haha'];

        $left = time() - 24 * 60 * 60;

        $right = time();

        $todayOrderNum = M('order')->field('count(id) as haha')->where("orderAddtime BETWEEN {$left} AND {$right}")->find()['haha'];

        $todayUserNum = M('user')->field('count(id) as haha')->where("addtime BETWEEN {$left} AND {$right}")->find()['haha'];

        $todayPrice = M('order')->field('sum(orderTotalPrice) as haha')->where("orderStatus = 2 AND orderAddtime BETWEEN {$left} AND {$right}")->find()['haha'];
        //管理员表
        $adminTotal = M('admin')->field('count(*)')->select();

        $adminTotal = $adminTotal[0]['count(*)'];

        $adminGroup = M('authGroup')->field('id, title')->select();

            $pieData = [];
        foreach ($adminGroup as $v) {
            array_unshift($pieData, array($v['title'], count(M('authGroupAccess')->where("group_id={$v['id']}")->select())/$adminTotal*100 ));

        }

        $this->assign('pieData', json_encode($pieData));

        

        $this->assign('todayUserNum', $todayUserNum);

        $this->assign('todayOrderNum', $todayOrderNum);

        $this->assign('todayPrice', $todayPrice);

        $this->assign('allPrice', $allPrice);

    	$this->assign('oNum', $orderNum);

    	$this->assign('uNum', $userNum);

    	$this->assign('aNum', $AdminNum);

    	$this->assign('num', $num);

       	$this->display('Backstage/index');
    }

    public function todayPrice()
    {
        $left = time() - 24 * 60 * 60;

        $right = time();

        $todayPrice['todayPrice'] = M('order')->field('id,uid,orderAddtime,orderTotalPrice')->where("orderStatus = 2 AND orderAddtime BETWEEN {$left} AND {$right}")->select();

        $todayPrice['todayTotalPrice'] = M('order')->field('sum(orderTotalPrice) as haha')->where("orderStatus = 2 AND orderAddtime BETWEEN {$left} AND {$right}")->find()['haha'];

        foreach ($todayPrice['todayPrice'] as $k => $v) {
            $todayPrice['todayPrice'][$k]['orderaddtime'] = date('Y-m-d H:i:s', $v['orderaddtime']);
        }

        $this->assign('todayPrice', $todayPrice);

        $this->display('Backstage/todayPrice');
    }

    public function allPrice()
    {
        $allPrice['allPrice'] = M('order')->field('id,uid,orderAddtime,orderTotalPrice')->where("orderStatus = 2")->select();

        $allPrice['allTotalPrice'] = M('order')->field('sum(orderTotalPrice) as haha')->where("orderStatus = 2")->find()['haha'];

        foreach ($allPrice['allPrice'] as $k => $v) {
            $allPrice['allPrice'][$k]['orderaddtime'] = date('Y-m-d H:i:s', $v['orderaddtime']);
        }

        $this->assign('allPrice', $allPrice);

        $this->display('Backstage/allPrice');
    }

}
