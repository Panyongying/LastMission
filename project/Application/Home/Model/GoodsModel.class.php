<?php

namespace Home\Model;

use Think\Model;

class GoodsModel extends Model
{

    //查一级分类
    public function OneList()
    {
        $OneList = M('type')->field('id,name')->where('pid=0')->select();
        return $OneList;
    }

    // 根据pid查二级分类
    public function twoGoodsList()
    {
        $pid = I('post.pid');

        $list = M('type')->where('pid='.$pid)->select();

        return $list;
    }

    //直接查二级分类
    public function twoList()
    {
        $pid = I('get.pid');

        $twoList = M('type')->where('pid='.$pid)->select();

        return $twoList;
    }

    //查询商品图片、名字、价格信息
    public function goodsList()
    {
        $id = I('get.pid');
        // 根据type表的id查出这个id下的type的pid，根据pid查goods表的所有相关商品
        $Model = new Model();

        $goodsList = $Model->query("SELECT p.pic,g.id,g.name,g.price FROM __GOODS__ g,__GOODS_PIC__ p,__TYPE__ t WHERE t.pid={$id} AND g.tid=t.id AND p.gid=g.id AND g.status='1' ORDER BY g.addtime DESC LIMIT 6");

        for ($i=0; $i<count($goodsList); $i++) {

            $goodsList[$i]['pic'] = ltrim($goodsList[$i]['pic'], './');
        }

        return $goodsList;
    }

    //查询商品
    public function lists()
    {

        $tid = I('get.tid');

        //要g.id,g.name,g.price,p.pic,s.aid
        $data = M('goods')->field('id,name,price')->where('tid='.$tid)->select();

        for ($i=0; $i<count($data); $i++) {

            //找出图片
            $data[$i]['pic'] = M('goods_pic')->field('pic')->where('gid='.$data[$i]['id'])->select();

            //找出属性
            $data[$i]['aid'] = M('stock')->field('aid')->where('gid='.$data[$i]['id'])->select();

            //处理图片路劲
            for ($j=0; $j<count($data[$i]['pic']); $j++) {

                $data[$i]['pic'][$j] = ltrim($data[$i]['pic'][$j]['pic'], './');

            }

            //处理属性
            for ($j=0; $j<count($data[$i]['aid']); $j++) {

                $data[$i]['aid'][$j] = $data[$i]['aid'][$j]['aid'][0];

                $data[$i]['color'] = array_unique($data[$i]['aid']);

            }

            unset($data[$i]['aid']);

            sort($data[$i]['color']);

            for ($k=0; $k<count($data[$i]['color']); $k++) {

                $data[$i]['color'][$k] = M('attr')->field('attrName')->select($data[$i]['color'][$k]);
            }

        }

        return $data;
    }

    //查颜色
    public function typeOne()
    {

        $attrName = M('attr')->field('attrName')->where('attrType=1')->select();

        return $attrName;
    }

    //查尺码
    public function typeTwo()
    {

        $attrName = M('attr')->field('attrName')->where('attrType=2')->select();

        return $attrName;
    }

    //商品详情信息
    public function goodsDetail()
    {
        $id = I('get.id');

        //设置缓存信息
        S(array(

            'type'=>'memcache',
            'host'=>'192.168.42.167',
            'port'=>'11211',
            'prefix'=>'think',
            'expire'=>100)
        );

        //查询有没有设定缓存时间
        $expire = M('expire')->field('expire')->where('gid='.$id)->find();

        //判断是否缓存了des，是就不查，没有就查
        if ( !isset(S($key)['des']) ) {

            $goodsfield = 'name,price,des';

        } else {

            $goodsfield = 'name,price';
            $data['des'] = S($key)['des'];
        }

        $data = M('goods')->field($goodsfield)->where('id='.$id)->find();

        $data['pic'] = M('goods_pic')->field('pic')->where('gid='.$id)->select();

        $data['aid'] = M('stock')->field('aid')->where('gid='.$id)->select();

        //判断是否缓存了detail，是就不查，没有就查
        if ( !isset(S($key)['detail']) ) {

            $data['detail'] = M('goods_detail')->field('detail')->where('gid='.$id)->find();

        } else {

            $data['detail'] = S($key)['detail'];
        }

        $key = md5($id);

        if ( !isset($exist) ) {

            $exist = 'exist';

            $menca = $data['detail'];
            $menca['des'] = $data['des'];

            if (isset($expire)) {

                S($key, $menca, $expire['expire']);

            } else {

                S($key, $menca);
            }
        }

        for ($i=0; $i<count($data['pic']); $i++) {

            $data['pic'][$i]['pic'] = ltrim($data['pic'][$i]['pic'], './');
        }

        for ($j=0; $j<count($data['aid']); $j++) {

            $data['color'][$j] = $data['aid'][$j]['aid'][0];
            $data['size'][$j] = $data['aid'][$j]['aid'][2];
        }
        $data['size'] = array_unique($data['size']);
        sort($data['size']);
        $data['color'] = array_unique($data['color']);

        unset($data['aid']);

        for ($i=0; $i<count($data['color']); $i++) {

            $data['color'][$i] = M('attr')->field('attrName')->find($data['color'][$i]);
        }

        for ($i=0; $i<count($data['size']); $i++) {

            $data['size'][$i] = M('attr')->field('attrName')->find($data['size'][$i]);
        }

        $data['id'] = $id;

        return $data;
    }

    //ajax根据颜色查图片
    public function colorPics()
    {

        $aid = I('post.aid');
        $gid = I('post.gid');

        $aid = M('attr')->field('id')->where("attrName='{$aid}'")->find();

        $map['aid'] = $aid['id'];
        $map['gid'] = $gid;

        $data = M('goods_pic')->field('pic')->where($map)->select();

        for ($i=0; $i<count($data['pic']); $i++) {

            $data['pic'][$i] = ltrim($data['pic'][$i], './');
        }

        // $oneAid = M('stock')->field('aid')->where('gid='.$gid)->find();
        // dump($oneAid);exit;

        return $data;
    }


}

