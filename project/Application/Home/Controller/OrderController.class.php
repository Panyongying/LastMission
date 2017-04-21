<?php
	namespace Home\Controller;

	use Think\Controller;

	class OrderController extends Controller
	{
		public function checkoutLogin()
		{
			if (IS_POST) {
				$email = I('post.username');

		    	$status = D('user')->field('status')->where('email='."'$email'")->find();

		    	$status = $status['status'];

		    	if ($status == 3){
		    		$this->error('该用户被禁用,请联系管理员');
		    	}

		    	$num = D('user')->saveUserStatus();

		    	if($num == 3) {
		    		$this->error('该账户输入密码次数太多,暂时锁定30Min');
		    	}

			    $res = D('user')->signIn();
				
				if ($res) {
					$this->redirect('Home/Order/checkout');
				}else {
					$this->error('登录失败');
				}
			} else if (IS_GET) {
				$data = D('cart')->showCart();

				$this->assign('data', $data);

				$OneList = D('goods')->OneList();

				$this->assign('OneList', $OneList);

				$this->display('checkoutLogin');
			}
		}

		public function checkout()
		{
			$res = D('order')->checkoutLogin();
			
			if (!$res) {
				$this->checkoutLogin();
			} else {
				$data = D('cart')->showCart();

				if ($data == 'empty') {
					$this->redirect('Index/index');
				}

				$addr = D('order')->showAddress();

				$OneList = D('goods')->OneList();

				$this->assign('OneList', $OneList);

				$this->assign('data', $data);
				$this->assign('addr', $addr);

				$this->display();
			}
		}

		// 添加地址
		public function addAddress()
		{
			$res = D('order')->addAddress();

			if (!$res) {
				echo 2;
			} else {
				echo json_encode($res);
			}

		}

		// 确认订单操作
		public function queryOrder()
		{
			if (IS_POST) {
				$res = D('order')->queryOrder();

				if ($res === false) {
					echo 2;

					exit;
				}

				echo $res;
			} else if (IS_GET) {
				$oid = I('get.oid');

				if (empty($oid)) {
					$this->redirect('Cart/index');
				}

				// 获取订单数据
				$order = D('order')->queryOrder();

				if (!$order) { // 非法访问
					$this->redirect('Cart/index');
				}

				// 购物车数据
				$data = D('cart')->showCart();

				$OneList = D('goods')->OneList();

				$this->assign('OneList', $OneList);

				$this->assign('data', $data);
				$this->assign('orderData', $order['orderData']);
				$this->assign('orderDetail', $order['orderDetail']);

				$this->display();
			}
		}

		// 付款操作
		public function pay()
		{
			if (IS_POST) {
				$res = D('order')->pay();

				echo $res;
			} else if (IS_GET) {
				$this->redirect('Index/index');
			}
		}

		// 显示感谢页面
		public function thinkYou()
		{
			$data = D('cart')->showCart();

			$OneList = D('goods')->OneList();

			$this->assign('OneList', $OneList);

			$this->assign('data', $data);
			$this->display();
		}

		//确认收货操作
		public function receipt()
		{
			if (IS_POST) {
				$res = D('order')->receipt();

				echo $res;
			}
		}

		// 评论
		public function comment()
		{
			if (IS_POST) {

			} else if (IS_GET) {
				$this->display();
			}
		}
	}