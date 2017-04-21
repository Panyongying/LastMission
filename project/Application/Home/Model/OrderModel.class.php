<?php
	namespace Home\Model;

	use Think\Model;

	class OrderModel extends Model
	{
		// 检测是否登录
		public function checkoutLogin()
		{
			if (IS_POST) {
				
			} else if (IS_GET) {
				if (empty($_SESSION['userInfo'])) {
					return false;
				} else {
					return ture;
				}
			}
		}

		// 添加地址操作
		public function addAddress()
		{
			$res = D('user')->addAddress();

			if ($res == 1) { // 成功添加
				// 获取地址信息
				$addrData = $this->showAddress();

				if (!$addrData) {
					return false;
				}

				$addr = '';
				// 处理成html代码
				foreach ($addrData as $k => $v) {
					$addr .= '<li class="item js-check-option check-option delivery-option ng-scope">
				<label for="delivery-address-'.$v['id'].'" class="delivery-option-label">
					<input type="radio" name="addrid" id="delivery-address-'.$v['id'].'" class="js-update-on-change delivery-option-radio js-check-option-input ng-pristine ng-untouched ng-valid"';
					if ($v['status'] == 1) {
						$addr .= 'checked';
					}

					$addr .= '

					 value="'.$v['id'].'">
					<span class="vcard read-only-delivery-address">
						<span class="item fn ng-binding" itemprop="name">'.$v['recname'].'</span>
						<span class="adr ng-binding">'.$v['addr'].'<br>'.$v['zip'].'<br>'.$v['phone'].'</span>
					</span>
				</label>
			</li>';
				}

				return $addr;

			} else {
				return false;
			}
		}

		// 查出地址
		public function showAddress()
		{
			$uid = $_SESSION['userInfo']['id'];

			$map['uid'] = $uid;

			$addrData = M('addr')->where($map)->select();

			if (empty($addrData)) {
				$addrData = 'empty';
			}

			return $addrData;
		}

		// 确认订单操作
		public function queryOrder()
		{
			if (IS_POST) {
				$uid = intval($_SESSION['userInfo']['id']);

				// 判断非法访问
				if (empty($uid)) {
					return false;
				}

				$addrid = I('post.addrid');

				if (empty($addrid)) {
					return false;
				}

				// 根据地址id查出地址信息
				$addrData = M('addr')->where("id={$addrid}")->find();

				// 查出购物车信息
				$cartData = M('cart')->where("uid={$uid}")->select();

				// 总价
				$totalPrice = 0;

				// 遍历出商品价格并放回数组
				foreach ($cartData as $k => $v) {
					unset($cartData[$k]['id']);

					$cartData[$k]['gprice'] = M('goods')->field('price')->where("id={$v['gid']}")->find()['price'];

					$totalPrice += $v['gnum'] * $cartData[$k]['gprice'];
				}

				// 创建订单
				$order = [];
				$order['uid'] = $uid;
				$order['orderAddtime'] = time();
				$order['orderTotalPrice'] = $totalPrice;
				$order['orderRecName'] = $addrData['recname'];
				$order['orderRecZip'] = $addrData['zip'];
				$order['orderRecAddr'] = $addrData['addr'];
				$order['orderRecPhone'] = $addrData['phone'];
				// 开启事务插入数据
				M('order')->startTrans();

				$oid = M('order')->data($order)->add();

				if (!$oid) { // 添加失败
					M('order')->rollback();

					return false;
				}

				// 循环将购物车的内容添加入订单详情减库存
				foreach ($cartData as $k => $v) {
					$v['oid'] = $oid;



					$res = M('order_detail')->add($v);

					if (!$res) { // 添加失败
						M('order')->rollback();

						return false;
					}

					// 减库存
					$kucun['gid'] = $v['gid'];
					$kucun['aid'] = $v['aid'];

					// 查出库存
					$goodsNum = M('stock')->field('goodsNum')->where($kucun)->find()['goodsnum'];

					
					// 查出主键
					$kucun['id'] = M('stock')->field('id')->where($kucun)->find()['id'];

					$kucun['goodsNum'] = $goodsNum - $v['gnum'];

					// 更新库存
					$res = M('stock')->save($kucun);

					if (!$res) {
						M('order')->rollback();

						return false;
					}
				}

				// 删除购物车表的信息
				$where['uid'] = $uid;
				
				$res = M('cart')->where($where)->delete();

				if ($res === false) { // 出错
					M('order')->rollback();

					return false;
				}

				// 提交事务
				M('order')->commit();

				// 返回订单号
				return $oid;
			} else if (IS_GET) {
				$oid = I('get.oid');

				$order['id'] = $oid;
				$order['uid'] = $_SESSION['userInfo']['id'];

				// 查出订单信息
				$orderData = M('order')->where($order)->find();

				if (empty($orderData)) {
					return false;
				}

				// if ($orderData['orderstatus'] != 3) { // 判断订单是否超时，自动取消
				// 	if (($orderData['orderaddtime'] + 21600) > time()) { // 超时
				// 		$change['orderStatus'] = 3; // 已取消
				// 		$change['id'] = $orderData['id']; // 主键

				// 		$M('order')->save($change);
				// 	}
				// }

				$orderData['orderaddtime'] = date('Y-m-d H:i:s', $orderData['orderaddtime']);
				$orderData['ordertotalprice'] = number_format($orderData['ordertotalprice'], 2);

				// 查出订单详情
				$od['oid'] = $oid;
				$orderDetail = M('order_detail')->where($od)->select();

				// 循环查出详细信息
				foreach ($orderDetail as $k => $v) {
					$gid = $v['gid'];
					$aid = $v['aid'];

					// 查询名字
					$nameArr['id'] = $gid;
					$name = M('goods')->field('name')->where($nameArr)->find()['name'];

					// 查询颜色
					$map['id'] = array('IN', $aid);
					$map['attrType'] = array('EQ', 1);
					$color = M('attr')->field('attrName')->where($map)->find()['attrname'];

					// 查询图片
					$where['aid'] = array('IN', $aid);
					$where['gid'] = array('EQ', $gid);
					$pic = __APP__.'Public/'.ltrim(M('goods_pic')->field('pic')->where($where)->find()['pic'], './');

					// 查询尺码
					$map['attrType'] = array('EQ', 2); // 先查询衣服的尺码
					$size = M('attr')->field('attrName')->where($map)->find()['attrname'];

					// 当结果为空时说明不是衣服继续查鞋子尺码
					if (!$size) {
						$map['attrType'] = array('EQ', 3);
						$size = M('attr')->field('attrName')->where($map)->find()['attrname'];
					}

					$orderDetail[$k]['gprice'] = number_format($orderDetail[$k]['gprice'], 2);
					$orderDetail[$k]['allPrice'] = number_format($v['gnum'] * $v['gprice'], 2);
					$orderDetail[$k]['name'] = $name;
					$orderDetail[$k]['color'] = $color;
					$orderDetail[$k]['size'] = $size;
					$orderDetail[$k]['pic'] = $pic;
				}

				// 存入数组返回
				$data['orderDetail'] = $orderDetail;
				$data['orderData'] = $orderData;

				return $data;
			}
		}

		// 付款操作
		public function pay()
		{
			if (IS_POST) {
				$pay['id'] = I('post.oid'); // 主键
				$pay['orderStatus'] = 2; // 修改状态为已付款
				$pay['orderConfirmTime'] = time(); // 订单确认时间

				$res = M('order')->save($pay);

				if ($res === false) {
					return 2;
				} else {
					return $res;
				}
			}
		}

		// 确认收货操作
		public function receipt()
		{
			$map['id'] = I('post.id'); // 主键
			$map['orderSendStatus'] = 3; // 已收货

			$res = M('order')->save($map);

			if ($res === false) {
				return 'no';
			} else {
				return $res;
			}
		}

		// 评论
		public function comment()
		{
			if (IS_POST) {

			} else if (IS_GET) {
				
			}
		}
	}