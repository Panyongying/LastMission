<?php

namespace HMadmin\Controller;

use Think\Controller;


class IndexController extends CommonController 
{
    public function index()
    {	
    	$res = M('goods')->field('id')->select();

    	$num = count($res);

    	$res = M('admin')->field('id')->select();

    	$AdminNum = count($res);

    	$userNum = count(M('user')->field('id')->select());

    	$orderNum = count(M('order')->field('id')->select());

    	$this->assign('oNum', $orderNum);

    	$this->assign('uNum', $userNum);

    	$this->assign('aNum', $AdminNum);

    	$this->assign('num', $num);

       	$this->display('Backstage/index');
    }



}
