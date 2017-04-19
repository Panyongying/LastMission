<?php
	namespace Home\Model;

	use Think\Model;

	class CommentaryModel extends Model
	{
		public function comment()
		{
			if (IS_POST) {
				$comment = I('post.');

				$oid = $comment['oid'];
				$time = time();

				foreach ($comment['comment'] as $k => $v) {
					$com = [];
					$com['gid'] = $k;
					$com['oid'] = $oid;
					$com['uid'] = $_SESSION['userInfo']['id'];
					$com['contents'] = $v;
					$com['addtime'] = $time;

					// 入库
					$res = M('commentary')->add($com);

					if ($res === false) {
						return false;
					}
				}

				return true;
			} else if (IS_GET) {
				$oid = I('get.oid');

				// 判断非法访问
				if (empty($oid)) {
					return false;
				}


				// 查询订单有无评论
				$comArr['oid'] = $oid;
				$res = M('commentary')->field('id')->where($comArr)->find()['id'];

				if ($res) { // 有评论不能继续评论
					return false;
				}

				// 根据订单id查出详情的商品的图片名字和属性
				$map['oid'] = $oid;
				$orderDetail = M('order_detail')->field('oid,gid,aid')->where($map)->select();

				if (empty($orderDetail)) { // 找不到详情，非法访问
					return false;
				}

				$detail = [];
				foreach ($orderDetail as $k => $v) {
					$detail[$k]['gid'] = $v['gid'];
					$detail[$k]['oid'] = $v['oid'];
					// 查询名字
					$nameArr['id'] = $v['gid'];

					$detail[$k]['name'] = M('goods')->field('name')->where($nameArr)->find()['name'];

					// 查询图片
					$picArr['gid'] = $v['gid'];

					$detail[$k]['pic'] = ltrim(M('goods_pic')->field('pic')->where($picArr)->find()['pic'], './');

					// 查询属性
					$attrArr['id'] = array('IN', $v['aid']);

					$detail[$k]['attr'] = M('attr')->field('group_concat(attrName) as new')->where($attrArr)->find()['new'];
				}

				return $detail;
			}
		}
	}