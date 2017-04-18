<?php
	namespace Home\Controller;

	use Think\Controller;

	class StoreController extends Controller
	{
		public function index()
		{
			$OneList = D('goods')->OneList();
			$this->assign('OneList', $OneList);
			$this->display('StoreInfo/store');

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