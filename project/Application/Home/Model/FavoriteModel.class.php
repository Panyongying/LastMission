<?php
	namespace Home\Model;

	use Think\Model;

	Class FavoriteModel extends Model
	{

		//加入收藏
		public function addGoods()
		{

			$data['gid'] = I('post.gid');

			$data['uid'] = $_SESSION['userInfo']['id'];

			$res = $this->where($data)->find();

			if (!$res){

				$res = $this->add($data);

				return $res;
			
			}
	
		}

		//点亮收藏的心
		public function checkFavorite()
		{
			$uid = $_SESSION['userInfo']['id'];

			$res = $this->field('gid')->where('uid='.$uid)->select();
		
			return $res;
		}

		public function getGoodsDetail()
		{

			$uid = $_SESSION['userInfo']['id'];

			$res = $this->field('gid,id')->where('uid='.$uid)->select();


			$arr = array();

			
			foreach($res as $key=>$v){

				$gid = $v['gid'];

				$res = M('goods')->field('hm_goods.id,hm_goods.name,hm_goods.price,hm_stock.aid')->join('hm_stock ON hm_goods.id = hm_stock.gid')->where('hm_goods.id='.$gid)->select();

				$pic = M('goods_pic')->field('pic')->where('gid='.$v['gid'])->find();

				$arr[] = $res;			
				
				$arr[$key][0]['fid'] = $v['id'];

				$arr[$key][0]['pic'] = $pic['pic'];

				
			}

			// dump($arr);
		
		

			$array = array();
			foreach($arr as $val){

				foreach ($val as $k => $va){

					$val[$k]['color'] = explode(',',$va['aid'])[0];

					$val[$k]['size'] = explode(',',$va['aid'])[1];

					$c = [1=>'红色','绿色','黄色'];

					$val[$k]['color'] = $c[ $val[$k]['color'] ];

					$s = [4=>'S','M','L','XL','XXL','XS'];

					$val[$k]['size'] = $s[ $val[$k]['size'] ];
				}



				$array[] = $val;

			}
			

			return $array;

		}	

		//删除收藏
		
		public function deletefav()
		{
			$id = I('post.id');

			$res = $this->where('id='.$id)->delete();

			return $res;
		}	

		//添加收藏到购物车
		public function addShopCar()
		{
			$fid = I('post.fid');

			$data['uid'] = $_SESSION['userInfo']['id'];

			$data['gid'] = I('post.gid');

			$data['aid'] = I('post.aid');

			$res = M('cart')->add($data);

			if($res != 0){

				$this->where('id='.$fid)->delete();

				return $res;

			}else {

				return 0;
			}



		}	

	}