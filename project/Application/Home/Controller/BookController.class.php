<?php
	
	namespace Home\Controller;

	use Think\Controller;

	class BookController extends CommonController
	{

		public function index()
		{	
			$OneList = D('goods')->OneList();
			$this->assign('OneList', $OneList);
			$this->display('Book/book');
		}
		//发送验证码
		public function sendCode()
		{
			
			$AppKey = '9c6a860c6ebead800470c47ac8efdccd';
			
			$AppSecret = 'ab9d4834bca3';

			$p = new \Org\Util\Send($AppKey,$AppSecret,'curl');

			$phone = I('post.phone');

			//发送验证码
			$res = $p->sendSmsCode($phone);

			dump($res);
		

		}
		//验证验证码
		public function verifyCode()
		{
			$AppKey = '9c6a860c6ebead800470c47ac8efdccd';
			
			$AppSecret = 'ab9d4834bca3';

			$p = new \Org\Util\Send($AppKey,$AppSecret,'curl');

			$phone = I('post.phone');

			$code = I('post.code');

			$res = $p->verifycode($phone,$code);

			
			if ($res['code'] == 200){

				$this->success('验证成功');
			}else{

				$this->error('验证失败');
			}



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