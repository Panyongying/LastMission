<?php
	namespace HMadmin\Model;

	use Think\Model;

	class OrderDetailModel extends Model
	{
		public function getOrderDetail()
		{
			$oid = I('get.oid');

			if (empty($oid)) {
				return false;
			}

			// 先获取订单的全部信息
			$map1['id'] = $oid;

			$orderData = M('order')->where($map1)->find();

			// 结果为空或出错时
			if (!$orderData) {
				return false;
			}

			// 获取订单详情
			$map2['oid'] = $oid;
			$orderDetail = M('order_detail')->where($map2)->select();

			// 结果为空或出错时
			if (!$orderDetail) {
				return false;
			}

			// 格式化价格
			$orderData['ordertotalprice'] = number_format($orderData['ordertotalprice'], 2);

			foreach ($orderDetail as $k => $v) {
				// 查出商品名并存入数组
				$name['id'] = $v['gid'];
				$orderDetail[$k]['gname'] = M('goods')->field('name')->where($name)->find()['name'];

				// 查出属性名并存入数组
				$map3['id'] = array('IN', $orderDetail[$k]['aid']);

				$orderDetail[$k]['attrName'] = M('attr')->field('group_concat(attrName) as new')->where($map3)->find()['new'];

				// 查出图片
				$pic['gid'] = $v['gid'];
				$pic['aid'] = $v['aid'];
				$orderDetail[$k]['pic'] = __APP__.'Public/'.ltrim(M('goods_pic')->field('pic')->find()['pic'], './');

				// 价格
				$orderDetail[$k]['gprice'] = number_format($v['gprice'], 2);

				// 总价
				$orderDetail[$k]['allPrice'] = number_format($v['gnum'] * $v['gprice'], 2);

			}


			// 存入数组返回
			$data['orderData'] = $orderData;
			$data['orderDetail'] = $orderDetail;
			return $data;
		}
	}