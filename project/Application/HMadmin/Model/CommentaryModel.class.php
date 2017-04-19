<?php
	namespace HMadmin\Model;

	use Think\Model;

	class CommentaryModel extends Model
	{
		public function getList($map)
		{
			// 获取所有评论数据
			$CommentaryList = M('commentary')->field('id')->where($map)->select();

			// 分页
			$page = new \Think\Page(count($CommentaryList), 10);

			$CommentaryList = M('commentary')->where($map)->limit($page->firstRow.','.$page->listRows)->select();


			// 处理日期信息
			foreach ($CommentaryList as $k => $v) {
				$CommentaryList[$k]['addtime'] = date('Y-m-d H:i:s', $v['addtime']);
			}

			// 拿到分页按钮存入数组返回
			// $data['show'] = $page->show();
			
			$page->lastSuffix = false;//最后一页不显示为总页数
			$page->setConfig('header','<li class="am-disabled"><a>共<em>%TOTAL_ROW%</em>条  <em>%NOW_PAGE%</em>/%TOTAL_PAGE%页</a></li>');
	        $page->setConfig('prev','上一页');
	        $page->setConfig('next','下一页');
	        $page->setConfig('last','末页');
	        $page->setConfig('first','首页');
	        $page->setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
			$page_show = bootstrap_page_style($page->show());//重点在这里

			$data['show'] = $page_show;

			$data['CommentaryList'] = $CommentaryList;

			return $data;
		}

		public function deleteCommentary()
		{
			if (IS_AJAX) {
				$id = $_GET['id'];
			}

			$map['id'] = $id;

			$res = M('commentary')->where($map)->delete();

			if ($res) {
				return 1;
			} else {
				return 0;
			}
		}

		public function multipleDelete()
		{
			if (IS_AJAX) {
				$ids = rtrim($_POST['ids']);

				$map['id'] = array('IN', $ids);

				$res = M('commentary')->where($map)->delete();

				if ($res) {
					return 1;
				} else {
					return 0;
				}
			}
		}
	}