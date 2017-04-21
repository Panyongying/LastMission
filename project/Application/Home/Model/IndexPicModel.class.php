<?php
	namespace Home\Model;

	use Think\Model;

	class IndexPicModel extends Model
	{
		public function getMainPic()
		{
			$map['status'] = 1;
			$map['location'] = 1;
			$mainPic = M('index_pic')->where($map)->find();

			$mainPic['pic'] = ltrim($mainPic['pic'], '/');

			// 预定义数组
			$fontcolor = [1=>'black', 'white'];
			$align = [1=>'left', 'center', 'right'];
			$btncolor = [1=>'black', 'white'];
			$hor = [1=>'left', 'center', 'right'];
			$ver = [1=>'top', 'middle', 'bottom'];

			$mainPic['fontcolor'] = $fontcolor[$mainPic['fontcolor']];
			$mainPic['align'] = $align[$mainPic['align']];
			$mainPic['btncolor'] = $btncolor[$mainPic['btncolor']];
			$mainPic['hor'] = $hor[$mainPic['hor']];
			$mainPic['ver'] = $ver[$mainPic['ver']];

			return $mainPic;
		}

		public function getLastPic()
		{
			$map['location'] = array('NEQ', 1);
			$map['status'] = 1;

			// 预定义数组
			$fontcolor = [1=>'black', 'white'];
			$align = [1=>'left', 'center', 'right'];
			$btncolor = [1=>'black', 'white'];
			$hor = [1=>'left', 'center', 'right'];
			$ver = [1=>'top', 'middle', 'bottom'];

			$lastPic = M('index_pic')->where($map)->order('location')->select();

			foreach ($lastPic as $k => $v) {
				$lastPic[$k]['fontcolor'] = $fontcolor[$v['fontcolor']];
				$lastPic[$k]['align'] = $align[$v['align']];
				$lastPic[$k]['btncolor'] = $btncolor[$v['btncolor']];
				$lastPic[$k]['hor'] = $hor[$v['hor']];
				$lastPic[$k]['ver'] = $ver[$v['ver']];

				$lastPic[$k]['pic'] = ltrim($v['pic'], '/');
			}

			return $lastPic;

		}
	}