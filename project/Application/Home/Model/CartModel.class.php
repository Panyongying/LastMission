<?php
	namespace Home\Model;

	use Think\Model;

	class CartModel extends Model
	{
		public function showCart()
		{
			$bool = $this->checkLogin();

			if ($bool) { // 已登录
				// 查询出购物车表的数据
				$uid = $_SESSION['userInfo']['id'];

				$map['uid'] = array('EQ', $uid);

				$cartList = M('cart')->where($map)->select();
			} else { // 未登录
				$cartList = @$_SESSION['cart'];
			}


			// 购物车为空时
			if (!$cartList) {
				return 'empty';
			}

			// 统计购物车的商品数量和总价
			$data['num'] = 0;
			$data['totalPrice'] = 0;

			// 根据商品id，属性id查询商品名，图片，价格，库存
			foreach ($cartList as $k => $v) {
				$gid = $v['gid'];
				$aid = $v['aid'];

				// 查询名字
				$name = M('goods')->field('name')->where("id={$gid}")->find()['name'];

				// 查询颜色
				$map['id'] = array('IN', $aid);
				$map['attrType'] = array('EQ', 1);
				$color = M('attr')->field('attrName')->where($map)->find()['attrname'];

				// 查询图片
				$where['aid'] = array('IN', $aid);
				$where['gid'] = array('EQ', $gid);
				$pic = __APP__.'/Public/'.ltrim(M('goods_pic')->field('pic')->where($where)->find()['pic'], './');

				// 查询尺码
				$map['attrType'] = array('EQ', 2); // 先查询衣服的尺码
				$size = M('attr')->field('attrName')->where($map)->find()['attrname'];

				// 当结果为空时说明不是衣服继续查鞋子尺码
				if (!$size) {
					$map['attrType'] = array('EQ', 3);
					$size = M('attr')->field('attrName')->where($map)->find()['attrName'];
				}

				// 查询价格
				$price = M('goods')->field('price')->where("id={$gid}")->find()['price'];

				// 查询库存
				$where['gid'] = array('EQ', $gid);
				$where['aid'] = array('EQ', $aid);

				$stock = M('stock')->field('goodsNum')->where($where)->find()['goodsnum'];

				$cartList[$k]['pic'] = $pic;
				$cartList[$k]['name'] = $name;
				$cartList[$k]['color'] = $color;
				$cartList[$k]['size']  = $size;
				$cartList[$k]['price'] = $price;
				$cartList[$k]['stock'] = $stock;
				$cartList[$k]['allPrice'] = number_format($price * $v['gnum'], 2);
				$data['num'] += $v['gnum'];
				$data['totalPrice'] += $v['gnum'] * $price;
			}

			$data['cartList'] = $cartList;
			$data['totalPrice'] = number_format($data['totalPrice'], 2);

			return $data;
		}

		// 这个方法检查用户是否登陆
		public function checkLogin()
		{
			if (empty($_SESSION['userInfo'])) {
				return false;
			} else {
				return ture;
			}
		}

		// 添加进购物车
		public function addToCart()
		{
			$bool = $this->checkLogin();

			if ($bool) { // 已登录
				// 查询购物车中有没有这件商品，有则数量加一
				$where['gid'] = I('post.gid');
				$where['uid'] = $_SESSION['userInfo']['id'];

				// 获取aid
				$color = I('post.color');
				$attr['attrName'] = $color;
				$colorid = M('attr')->field('id')->where($attr)->find()['id'];

				$size = I('post.size');
				$attr['attrName'] = $size;
				$sizeid = M('attr')->field('id')->where($attr)->find()['id'];

				$aid = $colorid.','.$sizeid;

				$where['aid'] = $aid;

				$gnum = M('cart')->where($where)->find()['gnum'];

				// 查出所剩库存
				$stock['gid'] = I('post.gid');
				$stock['aid'] = $aid;

				$stockNum = M('stock')->field('goodsNum')->where($stock)->find()['goodsnum'];

				if ($gnum >= $stockNum) {
					return 3; // 表示没库存了
				}


				if (empty($gnum)) { // 无这件商品
					$where['gnum'] = 1;

					$res = M('cart')->add($where);

					if (!$res) {
						return 2;
					}
				} else { // 有这商品
					$newNum['gnum'] = $gnum + 1;

					$res = M('cart')->where($where)->save($newNum);

					if ($res === false) {
						return 2;
					}
				}
			} else {
				$gid = I('post.gid');
				$uid = $_SESSION['userInfo']['id'];

				// 获取aid
				$color = I('post.color');
				$attr['attrName'] = $color;
				$colorid = M('attr')->field('id')->where($attr)->find()['id'];

				$size = I('post.size');
				$attr['attrName'] = $size;
				$sizeid = M('attr')->field('id')->where($attr)->find()['id'];

				$aid = $colorid.','.$sizeid;

				// 查出所剩库存
				$stock['gid'] = I('post.gid');
				$stock['aid'] = $aid;

				$stockNum = M('stock')->field('goodsNum')->where($stock)->find()['goodsnum'];

				foreach ($_SESSION['cart'] as $k => $v) {
					if ($gid == $v['gid'] && $uid == $v['uid'] && $aid == $v['aid']) { // 有这件商品
						if ($_SESSION['cart'][$k]['gnum'] >= $stockNum) {
							return 3; // 表示没库存了
						}

						$_SESSION['cart'][$k]['gnum'] += 1;
					} else { // 无这件商品
						$goods = I('post.');

						$goods['gnum'] = 1; // 默认添加1件
						$goods['aid'] = $aid;

						$_SESSION['cart'][] = $goods;
					}
				}
			}

			$data = $this->showCart();

			dump($data);exit;

			$result = $this->runData($data);

			unset($result['mainCart']);

			return json_encode($result);
		}

		// 删除购物车中的商品
		public function delFromCart()
		{
			$bool = $this->checkLogin();

			if ($bool) { // 已登录
				$map = I('get.');

				$map['uid'] = $_SESSION['userInfo']['id'];

				$res = M('cart')->where($map)->delete();

				if (!$res) {
					return 2;
				}
			} else { // 未登录
				foreach ($_SESSION['cart'] as $k => $v) {
					if ($v['gid'] = I('get.gid')) {
						unset($_SESSION['cart'][$k]);
					}
				}
			}

			$data = $this->showCart();

			$result = $this->runData($data);

			return json_encode($result);
		}

		// 更改购物车中商品的数量
		public function changeNum()
		{
			$bool = $this->checkLogin();

			if ($bool) { // 已登录
				$data['gnum'] = I('get.gnum');

				$map['gid'] = I('get.gid');
				$map['uid'] = $_SESSION['userInfo']['id'];

				// 查出所剩库存
				$stock['gid'] = I('get.gid');
				$stock['aid'] = I('get.aid');

				$stockNum = M('stock')->field('goodsNum')->where($stock)->find()['goodsnum'];

				if ($data['gnum'] >= $stockNum) {
					return 3; // 表示没库存了
				}

				$res = M('cart')->where($map)->save($data);

				if (!$res) {
					return 2;
				}
			} else { // 未登录
				foreach ($_SESSION['cart'] as $k => $v) {
					if ($v['gid'] = I('get.gid')) {
						$_SESSION['cart'][$k]['gnum'] = I('get.gnum');
					}
				}
			}

			$data = $this->showCart();

			$result = $this->runData($data);

			return json_encode($result);
		}

		// 购物车到收藏夹
		public function cartToFav()
		{
			$bool = $this->checkLogin();

			if ($bool) { // 已登录
				$map = I('get.');
				$map['uid'] = $_SESSION['userInfo']['id'];

				// 开启事务
				$this->startTrans();

				// 查出收藏表是否有相同商品
				$data = M('favorite')->field('id')->where($map)->find();

				if (!$data) { // 不存在商品
					// 添加数据给收藏表
					$res = M('favorite')->add($map);

					if (!$res) {
						// 回滚
						$this->rollback();

						return 2;
					}
				}

				// 删除购物车表数据
				$res = M('cart')->where($map)->delete();

				if (!$res) {
					// 回滚
					$this->rollback();

					return 2;
				}

				// 提交事务
				$this->commit();
			} else { // 未登录
				return 3;
			}

			$data = $this->showCart();

			$result = $this->runData($data);

			return json_encode($result);
		}

		// 处理ajax数据并返回html
		public function runData($data)
		{
			if ($data == 'empty') {
				$result['topCart'] = '<div  class="cart_modal_popup empty-popup-cart">
                            						<dl class="clearfix">
                            							<dd><h2>您的购物袋是空的</h2></dd>
                            						</dl>
                            					</div>

                            				    <div class="shopping-bag-rollover-summary">
                            						<dl class="clearfix">
                            							<dt>订单价值：</dt>
                            							<dd>¥0.00</dd>
                            						</dl>
                            						<dl class="shopping-bag-rollover-order-total">
                            							<dt>总价:</dt>
                            							<dd>¥0.00</dd>
                            						</dl>
                            					</div>';

                $result['mainCart'] = '<div class="ng-scope">
							<div id="cartPage-body-empty" class="box">
								<div class="box-content shopping-bag-empty">
									<h2>您的购物袋是空的</h2>
									<div class="ng-scope">
										您的购物袋是空的<br><br>';
				if (empty($_SESSION['userInfo']['id'])) {
					$result['mainCart'] .= '<a href="__APP__/Home/User/signIn">登录</a>';
				}

				$result['mainCart'] .= '
									</div>
								</div>
							</div>
						</div>';

				$result['goodsNum'] = 0;
				$result['totalPrice'] = '0.00';
			} else {
				$result['topCart'] = '<div class="grid col-4">
                                                    <div class="shopping-bag-rollover-scroll-up disabled">
                                                        <div class="navigation-arrow-up"></div>
                                                    </div>
                                                    <div class="shopping-bag-rollover-items-wrapper ">
                                                        <ul class="shopping-bag-rollover-items" style="top: 0px;">';
				$result['mainCart'] = '<ul class="product-detail-list responsive ng-scope" id="cartPage-items">';
				$result['goodsNum'] = $data['num'];
				$result['totalPrice'] = $data['totalPrice'];

				foreach ($data['cartList'] as $k => $v) {
					// 头部购物车的处理
					$result['topCart'] .= '<li class="shopping-bag-rollover-item clearfix clickable-container has-link ">
                                                                            <a href="">
                                                                                <img alt="Straight Regular Jeans" class="shopping-bag-rollover-item-image" height="126" width="84" src="'.$v['pic'].'" title="'.$v['name'].'">
                                                                                    </a>

                                                                            <div class="shopping-bag-item-product">

                                                                                <h3 class="product-item-headline">'.$v['name'].'</h3>
                                                                                <div id="redWhitePrices_0506590001001" class="product-item-price ">
                                        <span id="main_price" class="main_price_0506590001001">
                                                            ¥'.$v['price'].'</span>
                                                    <small id="white_price_0506590001001"></small>
                                                </div>
                                        <dl class="clearfix">
                                                                                    <dt>数量：</dt>
                                                                                    <dd>'.$v['gnum'].'</dd>
                                                                                    <dt>颜色：</dt>
                                                                                    <dd>'.$v['color'].'</dd>
                                                                                    <dt>尺码：</dt>
                                                                                    <dd>'.$v['size'].'</dd>
                                                                                </dl>
                                                                            </div>
                                                                            <div class="shopping-bag-item-total-price product-item-price">
                                                                                总价:&nbsp;
                                                                                ¥'.$v['allPrice'].'</div>
                                                                        </li>';
					// 主体购物车的处理
					$result['mainCart'] .= '<li class="product-detail-list-item ng-scope" id="'.$v['gid'].'">
					<div class="product-detail-list-item-image-wrapper">
					<div class="wrapper-inner">
				<a href="" class="product-detail-list-item-image "> 
		
					<img alt="'.$v['name'].'" title="'.$v['name'].'" class="product-detail-list-item-image-image" src="'.$v['pic'].'">
						 
			    </a>
			 </div>  
			</div>
			<div class="product-detail-list-item-details">
		
				<div class="product-detail-list-item-price-info">
					<p class="product-detail-list-item-total-price">
						总价：<span id="entry_new_price" class="ng-binding">¥'.$v['allPrice'].'</span>
					</p>
				</div>
		
				<!-- ngRepeat: marker in entry.productMarker -->
							
				<h3 class="sub-sub-heading ng-binding">'.$v['name'].'</h3>
							<div ng-show="entry.isYellowPriceAvailable" class="ng-hide">
				<p class="ng-binding product-detail-price">
					¥'.$v['price'].'</p>
			</div>

			<p class="product-detail-selection">
								</p><div class="product-item-selection ng-binding"></div>
							<p></p>
				<dl class="product-detail-list-item-details-list">
					<dt>
						商品编号：</dt>
					<dd class="ng-binding">'.$v['gid'].'</dd>
					
					<dt>
						颜色：</dt>
					<dd class="ng-binding">'.$v['color'].'</dd>

					<dt>
						尺码：</dt>
					<dd class="ng-binding">'.$v['size'].'</dd>
				</dl>
				
			</div>
			<div class="product-detail-list-item-actions">
                <button class="button secondary icon icon-trash rm-btn" type="button" title="Remove product"  aid="{$ov.aid}" gid="{$ov.gid}""></button>
                <button class="button secondary icon icon-move-favorite ng-scope fav-btn" type="button" data-saved-text="Saved to favorites" data-not-saved-text="Not saved to favorites" title="Toggle favorite" aid="'.$v['aid'].'" gid="'.$v['gid'].'"></button>
                <label class="product-detail-list-item-actions-label" for="shopping-bag-quantity-options-4"></label>
				<div class="select-primary product-detail-list-item-quantity">
    				<select name="product-detail-list-item-quantity-options-4" id="shopping-bag-quantity-options-4" data-validation="false" ng-change="updateQuantity(entry,entry.quantity)" ng-model="entry.quantity" ng-options="option for option in range(entry.maxQuantity)" class="ng-pristine ng-untouched ng-valid num-sel"  aid="'.$v['aid'].'" gid="'.$v['gid'].'">';
    				if ($v['stock'] >= 10) {
    					$v['stock'] = 10;
    				}

					for ($i = 1; $i <= $v['stock']; $i++) {
						$result['mainCart'] .= '<option value="'.$i.'"';

						if ($v['gnum'] == $i) {
							$result['mainCart'] .= ' selected ';
						}
						
						$result['mainCart'] .= 'label="'.$i.'">'.$i.'</option>';
					}

					$result['mainCart'] .= '
    				</select>
					</div>
           		</div>
			</li>';
				}

				$result['topCart'] .= '</ul>';
				$result['mainCart'] .= '</ul>';
			}

			return $result;
		}
	}