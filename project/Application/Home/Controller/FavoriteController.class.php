<?php

	namespace Home\Controller;

	use Think\Controller;

	class FavoriteController extends CommonController
	{
		//显示收藏页
		public function index()
		{
			if( !isset($_SESSION['userInfo']) ){

				$this->redirect('Home/User/signIn');
	  				  			
	  			exit;
	  		} 

			$arr = D('favorite')->getGoodsDetail();	

			$this->assign('array', $arr);

			$OneList = D('goods')->OneList();

			$this->assign('OneList', $OneList);
			
	  		$this->display('Favourites/favourites');      	

		}
		//加入收藏
		public function addFavorite()
		{
			if( !isset($_SESSION['userInfo']) ){

				echo 0;

				exit;
	  		} 

			$res = D('favorite')->addGoods();

			echo $res;
		}
		// 点亮收藏的爱心
		public function checkedFavorite()
		{

			if( !isset($_SESSION['userInfo']) ){

				echo 0;

				exit;
	  		} 

			$res = D('favorite')->checkFavorite();

			$res = json_encode($res);

			echo $res;

		}

		//删除收藏
		public function delFavorite()
		{
			$res = D('favorite')->deletefav();

			echo $res;
		}

		//将收藏的加入购物车
		public function addGoodscar()
		{
			$res = D('favorite')->addShopCar();

			echo $res;
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
		
		
	}