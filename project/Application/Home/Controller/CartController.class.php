<?php
	namespace Home\Controller;

	use Think\Controller;

	class CartController extends Controller
	{
		public function index()
		{
			$data = D('cart')->showCart();

			if (empty($_SESSION['userInfo']['id'])) {
				$this->assign('login', 2);
			} else {
				$this->assign('login', 1);
			}

			dump($_SESSION['cart']);

			$this->assign('data', $data);

			$this->display('cart/index');
		}

		// 添加购物车
		public function addToCart()
		{
			if (IS_POST) {
				$res = D('cart')->addToCart();
				
				echo json_encode($res);
			} else if (IS_GET) {
				$this->redirect('Index/index');
			}

		}

		// 删除购物车中的商品
		public function delFromCart()
		{
			$res = D('cart')->delFromCart();

			echo $res;
		}

		// 更改购物车中商品的数量
		public function changeNum()
		{
			$res = D('cart')->changeNum();

			echo $res;
		}

		// 购物车到收藏夹
		public function cartToFav()
		{
			$res = D('cart')->cartToFav();

			echo $res;
		}
	}