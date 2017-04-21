<?php

	namespace Home\Controller;

	use Think\Controller;

	class CommonController extends Controller
	{


		public function __construct()
		{
			parent::__construct();

            $OneList = D('goods')->OneList();
            $data = D('cart')->showCart();
            $links = D('Links')->getAllLinks();
			

            $this->assign('links', $links);
			$this->assign('OneList', $OneList);
			$this->assign('data', $data);


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