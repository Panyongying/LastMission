<?php

	namespace Home\Controller;

	use Think\Controller;

	class FavouritesController extends Controller
	{
		public function index()
		{
			if( !isset($_SESSION['userInfo']) ){

				$this->redirect('Home/User/signIn');
	  				  			
	  			exit;
	  		} 

	  		$this->display('Favourites/favourites');      	

		}


		public function getGoodsInfo()
		{	

			D('favorite')->getGoodsDetail();
			
		}
	}