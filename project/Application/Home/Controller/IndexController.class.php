<?php

namespace Home\Controller;

use Think\Controller;

import("XS.lib.XS");


class IndexController extends Controller
{
    public function index()
    {

        if(IS_GET){

            $indexData = D('goods')->indexData();
            $OneList = D('goods')->OneList();
            $data = D('cart')->showCart();
            $mainPic = D('IndexPic')->getMainPic();
            $links = D('Links')->getAllLinks();

            $this->assign('links', $links);
            $this->assign('mainPic', $mainPic);
            $this->assign('indexData', $indexData);
            $this->assign('data', $data);
            $this->assign('OneList', $OneList);
            $this->display();
        }

        if(IS_AJAX){

            $lastPic = D('IndexPic')->getLastPic();

            $lastPic = json_encode($lastPic);

            echo $lastPic;

        }
    }


    public function base()
    {

        if (IS_POST) {

            $twoList = D('goods')->twoGoodsList();

            echo json_encode($twoList);

        } else {

            $OneList = D('goods')->OneList();

            $this->assign('OneList', $OneList);
            $this->display('Base/base');
        }

    }

    //拿取商品
    public function goods()
    {
        $pid = I('get.pid');
        $OneList = D('goods')->OneList();
        $twoList = D('goods')->twoList();
        $goodsList = D('goods')->goodsList();

        $this->assign('OneList', $OneList);
        $this->assign('twoList', $twoList);
        $this->assign('goodsList', $goodsList);
        $this->assign('pid', $pid);
        $this->display('Goods/Goods');
    }

    //根据商品二级分类获得下面的商品
    public function goodsList()
    {
        $pid = I('get.pid');

        $OneList = D('goods')->OneList();
        $twoList = D('goods')->twoList();
        $lists = D('goods')->lists();
        $tid = $lists['tid'];
        unset($lists['tid']);
        $typeOne = D('goods')->typeOne();
        $typeTwo = D('goods')->typeTwo();

        $this->assign('OneList', $OneList);
        $this->assign('twoList', $twoList);
        $this->assign('lists', $lists);
        $this->assign('typeOne', $typeOne);
        $this->assign('typeTwo', $typeTwo);
        $this->assign('pid', $pid);
        $this->assign('tid', $tid);
        $this->display('Goods/GoodsList');
    }

    //ajax获取图片
    public function ajaxGetGoodsPic()
    {
        $gid = I('get.id');
        $res = M('goodsPic')->field('pic')->where("gid=$gid")->limit(1)->find();

        echo trim($res['pic'], './');
    }


    //搜索商品
    public function searchGoods()
    {
        $xs = new \XS('jhjy');
        $search = $xs->search;
        //搜索关键字
        $keyword = I('get.keyword');
        $search->setCollapse('id');
        $res = $search->setLimit(8)->search("$keyword");

        //匹配数量
        $lastCount = $search->count("$keyword");

        //一级菜单
        $OneList = D('goods')->OneList();
        //颜色
        $typeOne = D('goods')->typeOne();
        //size
        $typeTwo = D('goods')->typeTwo();

        $this->assign('typeTwo', $typeTwo);
        $this->assign('typeOne', $typeOne);
        $this->assign('lastCount', $lastCount);
        $this->assign('keyword', $keyword);
        $this->assign('res', $res);
        $this->assign('OneList', $OneList);
        $this->display('Search/search');
    }

    //商品筛选&ajax获取新数据
    public function getGoods()
    {
        $xs = new \XS('jhjy');
        $search = $xs->search;
        $search->setCollapse('id');



        if (IS_POST) {
            $data = I('post.data');
        } else {
            $data = I('get.data');
        }

        $res = preg_replace('/&quot;/', '"', $data);
        $data = json_decode($res);



        if ($data->attr != '') {
            foreach ($data->attr as $v) {
            $searchword .= $v.' ';
            }

        }





        $searchword .= $data->keyword;


        if (IS_POST) {
            switch ($data->orderBy) {
            case 'stock':
            $res = $search->setLimit($data->showNum)->setFuzzy()->search("$searchword");

                break;

            case 'ascPrice':
            $res = $search->setLimit($data->showNum)->setSort('price', true)->search("$searchword");

                break;

            case 'descPrice':
            $res = $search->setLimit($data->showNum)->setSort('price')->search("$searchword");

                break;

            default:
            $res = $search->setLimit($data->showNum)->search("$searchword");

                break;
            }
        } else {
            switch ($data->orderBy) {
            case 'stock':
            $res = $search->setLimit(8,$data->showNum)->setFuzzy()->search("$searchword");

                break;

            case 'ascPrice':
            $res = $search->setLimit(8,$data->showNum)->setSort('price', true)->search("$searchword");

                break;

            case 'descPrice':
            $res = $search->setLimit(8,$data->showNum)->setSort('price')->search("$searchword");

                break;

            default:
            $res = $search->setLimit(8,$data->showNum)->search("$searchword");
                break;
            }

        }




        //匹配条数
        $lastCount = $search->getLastCount();


        foreach ($res as $k => $v) {
            $res[$k] = array(
                'id'=>$v->id,
                'price'=>$v->price,
                'tid'=>$v->tid,
                'status'=>$v->status,
                'attrname'=>$v->attrname,
                'name'=>$v->name,
                'lastCount'=>$lastCount,
            );
        }



        echo json_encode($res);

    }



    //商品详情页
    public function goodsDetail()
    {
        if (IS_POST) {

        } else {

            $goodsDeatil = D('goods')->goodsDetail();
            $OneList = D('goods')->OneList();
            $commentary = D('goods')->commentary();
            $num = 1;
            $data = D('cart')->showCart();

            $this->assign('data', $data);
            $this->assign('OneList', $OneList);
            $this->assign('num', $num);
            $this->assign('goodsDeatil', $goodsDeatil);
            $this->assign('commentary', $commentary);
            $this->display('Goods/GoodsDetail');
        }
    }

    //ajax根据颜色查图片
    public function colorPics()
    {
        $pics = D('goods')->colorPics();

        echo json_encode($pics);
    }

    // ajax滚动加载商品
    public function ajaxGetData()
    {

        if (IS_AJAX) {

            $list = D('goods')->ajaxGetData();

            $this->ajaxReturn($list);
        }
    }
}
