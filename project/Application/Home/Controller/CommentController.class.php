<?php
	namespace Home\Controller;

	use Think\Controller;

	class CommentController extends Controller
	{
		public function comment()
		{
			if (IS_POST) {
				$res = D('commentary')->comment();

				if ($res) {
					$this->redirect('Home/User/orders');
				} else {
					$this->error('系统繁忙，请稍后再试');
				}
			} else if (IS_GET) {
				$res = D('commentary')->comment();

				if (!$res) {
					$this->redirect('Home/User/orders');
				}

				$this->assign('comdata', $res);

				$this->display();
			}
		}
	}